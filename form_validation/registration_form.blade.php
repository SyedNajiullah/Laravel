<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration-Form</title>
    <link href = '/style.css' rel = 'stylesheet'>
</head>
<body>
    <h2>Your journey <span class = 'heading-part'>Begins</span> Here</h2> 
    <h2 class = 'adding-margin'>Finish up your <span class = 'heading-part'>Registration</span> to Become a member</h2>
    @if($errors->any())
        <p class = 'error'>All Errors</p>
        <ol class = 'error'>
            @foreach($errors->all() as $error)
                <li> {{ $error }}</li>
            @endforeach
        </ol>
    @endif        
        @if(session('success'))
            <div class = 'success'>
                {{ session('success') }}
            </div>
        @endif

    {{-- enctype="multipart/form-data" = for file --}}
    <form class = "all-form" method = 'POST' action = "{{url('/')}}/registration" enctype="multipart/form-data">
        @csrf
        <div class = 'container'>
            <h3 class = 'pre-main-heading'>
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-select">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M3 3m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                <path d="M9 11l3 3l3 -3" />
            </svg>
            <span> -- Registration Form -- </span><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-select">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M3 3m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                <path d="M9 11l3 3l3 -3" />
            </svg></h3>
        <div>
        <div class = 'for-name'>
            <div>
                <label>First Name
                <input type = 'text' required class = 'first-name' min = '3' max = '10' placeholder = 'Enter first name *' name = 'first_name' value = "{{ old('first_name') }}"/>
                </label>
                @error('first_name')
                    <div class = 'per-error'>
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div>
            <label>First Name
                <input type = 'text' required class = 'second-name' min = '3' max = '10' placeholder = 'Enter first name *' name = 'last_name' value = "{{ old('last_name') }}"/>
            </label>
            @error('last_name')
                <div class = 'per-error'>
                    {{$message}}
                </div>
            @enderror
            </div>
        </div>
        <div>
            <label>Email Address</label> <br>
            <input type = 'email' required class = 'email-add' placeholder = 'Enter email address *' name = 'email' value = "{{ old('email') }}"/>
            @error('email')
                    <div class = 'per-error'>
                        {{$message}}
                    </div>
            @enderror
        </div>
        <div>
            <label for="password">Password</label> <br>
            <input type="password" name="password" class="pass" required>
            @error('password')
                    <div class = 'per-error'>
                        {{$message}}
                    </div>
            @enderror
        </div>
        <div>
            <label for="password_confirmation">Confirm Password</label> <br>
            <input type="password" name="password_confirmation" class="pass" required>
            @error('password_confirmation')
                    <div class = 'per-error'>
                        {{$message}}
                    </div>
            @enderror
        </div>
        <div>
            <label>Age</label> <br>
                <input type = 'number' required class = 'age' placeholder = 'Enter Age *' name = 'age' value = "{{ old('age') }}"/>
                @error('age')
                    <div class = 'per-error'>
                        {{$message}}
                    </div>
                @enderror
        </div>
        <div>
            <label>Picture</label> <br>
                <input type = 'file' required class = 'file' name = 'pic' value = "{{ old('pic') }}"/>
                @error('pic')
                    <div class = 'per-error'>
                        {{$message}}
                    </div>
                @enderror
        </div>
        <div>
            <label>Bio</label> <br>
                <textarea class = 'bio' required rows = '10' cols = '100' placeholder = 'Enter Bio *' class = 'txtarea' name ='bio' = " {{ old('bio') }} "></textarea>
                @error('bio')
                    <div class = 'per-error'>
                        {{$message}}
                    </div>
                @enderror
        </div>
        <div>
            <label>Intrests</label> <br>
            <input type = 'checkbox' class = 'cb' value = "{{ old('sport') }}" name = 'sport'/>
            <label>Sports</label>
            <input type = 'checkbox' class = 'cb' name = 'music' value = "{{ old('music') }}"/>
            <label>Music</label>
            <input type = 'checkbox' class = 'cb' name="movie" value = "{{ old('movie') }}"/>
            <label>Movies</label>
        </div>
        <div>
            <label>Gender</label> <br>
            <input type = 'radio' class = 'gen' name = 'gender' value = "male"/>
            <label>Male</label>
            <input type = 'radio' class = 'gen' name = 'gender' value = "female"/>
            <label>Female</label>
            @error('gender')
                    <div class = 'per-error'>
                        {{$message}}
                    </div>
            @enderror
        </div>
        <div>
            <label>Country</label> <br>
                <select class = 'country' name = 'country' value = "{{ old('country') }}">
                    <option value="United States">United States</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="Iraq">Iraq</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="Germany">Germany</option>
                    <option value="Iran">Iran</option>
                    <option value="Canada">Canada</option>
                </select>
                @error('country')
                    <div class = 'per-error'>
                        {{$message}}
                    </div>
                @enderror
        </div>
        <div>
            <label>Phone Number</label> <br>
                <input type = 'text' required class = 'phone' placeholder = 'Format 123-456-7890 *' name = 'phone_number' value = "{{ old('phone_number') }}"/>
                @error('phone_number')
                    <div class = 'per-error'>
                        {{$message}}
                    </div>
                @enderror
        </div>
        <div>
            <label>Address</label> <br>
                <input type = 'text' required class = 'add' placeholder = 'Enter address *' name = 'address' value = "{{ old('address') }}"/>
                @error('address')
                    <div class = 'per-error'>
                        {{$message}}
                    </div>
                @enderror
        </div>
        <div>
            <label>City</label> <br>
                <input type = 'text' required class = 'city' placeholder = 'Enter City *' name = 'city' value = "{{ old('city') }}"/>
                @error('city')
                    <div class = 'per-error'>
                        {{$message}}
                    </div>
                @enderror
        </div>
        <div>
            <label>Postal code</label> <br>
                <input type = 'text' required class = 'pc' placeholder = 'Enter Postal Code *' name = 'postal_code' value = "{{ old('postal_code') }}"/>
                @error('postal_code')
                    <div class = 'per-error'>
                        {{$message}}
                    </div>
                @enderror
        </div>
        <div>
            <label>Website URL</label> <br>
                <input type = 'url' required class = 'link' placeholder = 'Enter URL *' name = 'website_url' value = "{{ old('website_url') }}"/>
                @error('website_url')
                    <div class = 'per-error'>
                        {{$message}}
                    </div>
                @enderror
        </div>
        <div class = 'conditions'>
            <input type = 'checkbox' required placeholder = 'Enter URL *' name = 'terms_and_condition'/>
            <label>I agree to all terms and conditions</label> <br>
            @error('terms_and_condition')
                    <div class = 'per-error'>
                        {{$message}}
                    </div>
                @enderror
        </div>
        <button class = 'btn' type = 'submit'>Register</button>
    </form>
</body>
</html>