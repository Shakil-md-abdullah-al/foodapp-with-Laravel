<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 bim">
    <div class="login100-more" style="background-image: url('{{asset('loginsss')}}/images/food.jpg');">
    </div>
{{--    <h2 style="font-size: 25px; margin-top: 20px">Register Here</h2>--}}
{{--    <div>--}}
{{--        {{ $logo }}--}}
{{--    </div>--}}

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>

<style>
    .bim{
        background-image: url('{{asset('loginsss')}}/images/food.jpg');
        background-size: cover;
        opacity: 0.8;
    }
</style>
