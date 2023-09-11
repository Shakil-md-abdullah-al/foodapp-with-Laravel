@extends('user.master')
@section('title')
    About Us
@endsection
@section('content')
    <style>
        .contact-hread{
            font-size: 35px;
            font-family: Poppins;
            font-weight: 500;
            text-align: center;
            margin-top: 30px;
        }
        .why_section {
            background-color: #f5f5f5;
            padding: 60px 0;
        }
        .why_section .container {
            max-width: 800px;
            margin: 0 auto;
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }
        .fm {
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }
        textarea {
            height: 150px;
            resize: vertical;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 18px;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>

    <!-- why section -->

    <section class="why_section layout_padding">
        <div class="container">
            <h2 class="contact-hread">Contact Us</h2>
            <form action="{{route('contact-us')}}"class="fm" method="POST">
                @csrf
                <input type="text" placeholder="Enter your full name" name="name" required />
                <input type="email" placeholder="Enter your email address" name="email" required />
                <input type="text" placeholder="Enter subject" name="subject" required />
                <textarea placeholder="Enter your message" required name="message"></textarea>
{{--                <input type="hidden" name="status" />--}}
                <input type="submit" value="Submit" />
            </form>
        </div>
    </section>

    <!-- end why section -->

    <div style="width: 100%"><iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=2/3%20Ring%20Road,%20Golden%20Street,%20Shymoly,%20Dhaka+(Food%20App)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/population/">Population mapping</a></iframe></div>
@endsection

