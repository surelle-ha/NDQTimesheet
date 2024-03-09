<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;

class LogController extends Controller
{
    public function parseLogFile($filePath)
    {
        $file = file_get_contents($filePath);
        $lines = explode("\n", $file);
        $parsedLines = [];

        foreach ($lines as $line) {
            if (preg_match('/^\[(.*?)\].*/', $line, $header)) {
                $date = $header[1];
                $text = trim(str_replace("[$date]", '', $line));

                // Optionally, further parse $text to split level and message
                if ($text !== '') {
                    $parsedLines[] = ['date' => $date, 'text' => $text];
                }
            }
        }

        return $parsedLines;
    }

    public function getLogs()
    {
        $logPath = storage_path('logs/laravel.log'); // Adjust for your log file path

        if (!file_exists($logPath)) {
            return response()->json(['error' => 'Log file not found.'], 404);
        }

        $logData = $this->parseLogFile($logPath);
        return response()->json($logData);
    }
}
