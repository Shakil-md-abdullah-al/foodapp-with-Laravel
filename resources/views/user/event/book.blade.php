@extends('user.master')
@section('title')
    Book Events
@endsection

@section('content')
    <div class="container-fluid px-4">
        <br>
        <br>
        <div class="card mb-4">
{{--            <div class="card-header">--}}
{{--                <i class="fas fa-table me-1"></i>--}}
{{--                Manage Products--}}
{{--                <div class="d-flex justify-content-end" style="margin-top: -25px;"><a href="{{route('products.create')}}" class="btn btn-primary">Add Products</a></div>--}}

{{--            </div>--}}
                <style>

                    .event_section {
                        background-color: #fff;
                        padding: 20px;
                        border-radius: 10px;
                        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                    }

                    .event-header {
                        text-align: center;
                        color: #333;
                    }

                    .event-form {
                        margin-top: 20px;
                    }

                    label {
                        display: block;
                        margin-bottom: 5px;
                        color: #555;
                    }

                    select, input[type="text"], input[type="date"], input[type="number"] {
                        width: 100%;
                        padding: 10px;
                        margin-bottom: 15px;
                        border: 1px solid #ccc;
                        border-radius: 5px;
                    }

                    select {
                        background-color: #f8f8f8;
                    }

                    textarea {
                        width: 100%;
                        height: 150px;
                        padding: 10px;
                        margin-bottom: 15px;
                        border: 1px solid #ccc;
                        border-radius: 5px;
                        resize: vertical;
                    }

                    input[type="submit"] {
                        background-color: #333;
                        color: #fff;
                        padding: 10px 20px;
                        border: none;
                        border-radius: 5px;
                        cursor: pointer;
                    }

                    input[type="submit"]:hover {
                        background-color: #555;
                    }
                </style>
            <section class="event_section layout_padding">
                <div class="container">
                    <h2 class="event-header" style="font-size: 28px">Event Details</h2>
                    <form action="{{route('event-store')}}" class="event-form" method="POST">
                        @csrf
                        <label for="event-type">Event Type:</label>
                        <select id="event-type" name="event_type" required>
                            <option value="marriage">Marriage</option>
                            <option value="birthday">Birthday</option>
                            <option value="corporate-event">Corporate Event</option>
                            <!-- Add more event type options as needed -->
                        </select>

                        <label for="event-place">Place:</label>
                        <input type="text" id="event-place" placeholder="Enter the event location" name="place" required />

                        <label for="event-date">Date:</label>
                        <input type="date" id="event-date" name="event_date" required />

                        <label for="event-attendees">Number of People:</label>
                        <input type="number" id="event-attendees" placeholder="Enter the number of attendees" name="event_attendees" required />

                        <label for="event-message">Additional Information:</label>
                        <textarea id="event-message" placeholder="Enter any additional information" name="event_message"></textarea>

                        <input type="submit" value="Submit" />
                    </form>
                </div>
            </section>


        </div>
    </div>
@endsection
