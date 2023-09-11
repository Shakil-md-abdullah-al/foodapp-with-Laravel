<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
//            'usertype' => 'required|in:0,1,2', // Added validation for user type
            'office_code' => 'required_if:usertype,2', // Validation for office code if usertype is 2
            'num_employees' => 'required_if:usertype,2|integer',
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'phone' => $input['phone'],
//            'usertype' => $input['0'],
//            'office_code' => $input['office_code'],
//            'num_employees' => $input['num_employees'],
            'address' => $input['address'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
