<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    private static $cart;
    public static function saveEvent($request, $userId)
    {
        // Retrieve the User model based on the provided user ID
        $user = User::find($userId);

        // Check if the user exists
        if (!$user) {
            // Handle the case where the user doesn't exist
            // You might want to throw an exception or return an error response here
            return;
        }

        // Create a new Event instance
        $event = new Event();

        // Populate the Event model with data from the user model
        $event->name = $user->name;
        $event->email = $user->email;
        $event->phone = $user->phone;
        $event->address = $user->address;
        $event->user_id = $user->id;

        $event->event_type = $request->event_type;
        $event->place = $request->place; // Corrected field name
        $event->event_attendees = $request->event_attendees;
        $event->event_message = $request->event_message;
        $event->event_date = $request->event_date;
        $event->status = 'In Progress';

        $event->save();
    }


}
