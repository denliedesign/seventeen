<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MonthlyNewsCommand extends Command
{
    protected $signature = 'monthly-news {year} {month}';
    protected $description = 'Generate monthly news for a given year and month';

    public function handle()
    {
        $year = $this->argument('year');
        $month = $this->argument('month');

        // Generate and update page content
        $this->updatePageContent($year, $month);

        // Generate and update news page
        $this->updateNewsContent($year, $month);

        $this->info("Monthly news for $year-$month generated successfully!");
    }


    private function updatePageContent($year, $month)
    {
        // Generate content code
        $contentCode = view('templates.page-content', compact('year', 'month'))->render();

        // Create or update the page file
        $pagePath = resource_path("views/news/$year-$month.blade.php");
        File::put($pagePath, $contentCode);

        $this->info("Page /news/$year-$month.blade.php created or updated successfully!");
    }

    private function updateNewsContent($year, $month)
    {
        // Generate content code
        $contentCode = view('templates.preview-content', compact('year', 'month'))->render();

        // Read the existing content of the page
        $pagePath = resource_path("views/news.blade.php");
        $existingContent = File::get($pagePath);

        // Find the position to insert the new x-article component at the top
        $positionToInsert = strpos($existingContent, '<div class="row row-cols-2 row-cols-sm-2 row-cols-md-4 row-cols-lg-4">');
        $positionToInsert += strlen('<div class="row row-cols-2 row-cols-sm-2 row-cols-md-4 row-cols-lg-4">');

        if ($positionToInsert !== false) {
            // Insert the new x-article component at the top
            $newComponentCode = view('templates.preview-content', compact('year', 'month'))->render();
            $updatedContent = substr_replace($existingContent, $newComponentCode, $positionToInsert, 0);

            // Update the page file
            File::put($pagePath, $updatedContent);
        } else {
            $this->error("Couldn't find the correct position to insert the new x-article component.");
        }
    }
}
