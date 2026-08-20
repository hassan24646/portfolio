<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ContactMessage;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'subject' => 'required|string|max:255',
                'message' => 'required|string',
            ]);

            ContactMessage::create($validated);

            return 'OK';
        } catch (\Illuminate\Validation\ValidationException $e) {
            return 'Validation error: ' . implode(', ', array_merge(...array_values($e->errors())));
        } catch (\Exception $e) {
            return 'Error saving to database: ' . $e->getMessage();
        }
    }
}
