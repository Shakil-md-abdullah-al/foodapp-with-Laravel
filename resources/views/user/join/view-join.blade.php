@extends('user.master')
@section('title')
    Join With Us!!!
@endsection

@section('content')
    <x-guest-layout>

        <x-authentication-card>
            <h2 style="text-align: center;font-size: 20px;margin-top: 10px;margin-bottom: 20px">Join With Us</h2>
            {{--        --}}

            <x-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('join-str') }}" class="mb-5">
                @csrf

                <div>
                    <x-label for="name" value="{{ __('Name') }}" />
                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                </div>

                <div class="mt-4">
                    <label for="usertype" class="block text-gray-700 text-sm font-bold mb-2">{{ __('User Type') }}</label>
                    <select id="usertype" class="block w-full px-4 py-2 border rounded-lg bg-gray-100" name="usertype" required>
                        <option>Select</option>
                        <option value="0">Employee</option>
                        <option value="2">Office</option>
                    </select>
                </div>

                <div class="mt-4" id="employee_fields" style="display: none;">
                    <label for="office_code" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Office Code') }}</label>
                    <input id="office_code" class="block w-full px-4 py-2 border rounded-lg bg-gray-100" type="text" name="office_code" value="{{ old('office_code') }}"autocomplete="office_code" />
                </div>

                <div class="mt-4" id="num_employees_field" style="display: none;">
                    <label for="num_employees" class="block text-gray-700 text-sm font-bold mb-2">{{ __('Number of Employees') }}</label>
                    <input id="num_employees" class="block w-full px-4 py-2 border rounded-lg bg-gray-100" type="number" name="num_employees" value="{{ old('num_employees') }}" autocomplete="num_employees" />
                </div>

                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const usertypeSelect = document.getElementById('usertype');
                        const employeeFields = document.getElementById('employee_fields');
                        const numEmployeesField = document.getElementById('num_employees_field');

                        usertypeSelect.addEventListener('change', function() {
                            if (usertypeSelect.value === '0') {
                                employeeFields.style.display = 'block';
                                numEmployeesField.style.display = 'none';
                            } else if (usertypeSelect.value === '2') {
                                employeeFields.style.display = 'none';
                                numEmployeesField.style.display = 'block';
                            } else {
                                employeeFields.style.display = 'none';
                                numEmployeesField.style.display = 'none';
                            }
                        });
                    });
                </script>




                <div class="mt-4">
                    <x-label for="email" value="{{ __('Email') }}" />
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                </div>



                <div class="mt-4">
                    <x-label for="phone" value="{{ __('Phone') }}" />
                    <x-input id="phone" class="block mt-1 w-full" type="number" name="phone" :value="old('phone')" required autocomplete="phone" />
                </div>

                <div class="mt-4">
                    <x-label for="address" value="{{ __('Address') }}" />
                    <x-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autocomplete="address" />
                </div>

{{--                <div class="mt-4">--}}
{{--                    <x-label for="password" value="{{ __('Password') }}" />--}}
{{--                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />--}}
{{--                </div>--}}

{{--                <div class="mt-4">--}}
{{--                    <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />--}}
{{--                    <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />--}}
{{--                </div>--}}

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4">
                        <x-label for="terms">
                            <div class="flex items-center">
                                <x-checkbox name="terms" id="terms" required />

                                <div class="ml-2">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                    ]) !!}
                                </div>
                            </div>
                        </x-label>
                    </div>
                @endif

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                        {{ __('Already Joined?') }}
                    </a>

                    <x-button class="ml-4">
                        {{ __('Join') }}
                    </x-button>
                </div>
            </form>
        </x-authentication-card>
    </x-guest-layout>

@endsection
