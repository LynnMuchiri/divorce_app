<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Register</title>

  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />

  <link rel="stylesheet" href="{{asset('assets-login/css/bootstrap-login-form.min.css')}}" />
</head>

  
<form method="POST" action="{{ route('lawyer.store') }}" enctype="multipart/form-data">
        @csrf
        
<body>
  <section class="vh-100" style="background-color:#ffff;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="/images/logo.jpeg" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem; width: 800px; height: 900px;" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">

  
                    <div class="d-flex align-items-center mb-3 pb-1">
                      <i class="fas fa-cubes fa-2x me-3" style="color: #669869;"></i>
                      <span class="h1 fw-bold mb-0">DecouplIN</span>
                    </div>
  
                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Register Here</h5>

                    <div class="form-outline mb-4">
                      <input type="name" id="full_name"name="full_name" :value="old('full_name')" class="form-control form-control-lg" required autofocus autocomplete/>
                      <label class="form-label" for="name" :value="__('Name')" >Full Name</label>
                      <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <div class="form-outline mb-4">
                      <label for="profile_photo">Profile Photo:</label>
                      <input type="file" id="profile_photo" name="profile_photo" class="form-control form-control-lg">
                      <x-input-error :messages="$errors->get('profile_photo')" class="mt-2" />
                    </div>

  
                    <div class="form-outline mb-4">
                      <input type="email" id="email" name="email" :value="old('email')" class="form-control form-control-lg" required autocomplete="username"/>
                      <label class="form-label" for="email"  :value="__('Email')" >Email address</label>
                      <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
  
                    <div class="form-outline mb-4">
                      <input type="password" id="password" name="password"  class="form-control form-control-lg"  required autocomplete="new-password"/>
                      <label class="form-label" for="password" :value="__('Password')" >Password</label>
                      <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="form-outline mb-4">
                      <input type="number" id="phone_number" name="phone_number" class="form-control form-control-lg">
                      <label class="form-label" for="phone_number"  :value="__('Phone_Number')" >Phone Number</label>
                      <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
                    </div>

                    <div class="form-outline mb-4">
                      <input type="text" id="address" name="address" class="form-control form-control-lg">
                      <label class="form-label" for="address"  :value="__('Address')" >Address</label>
                      <x-input-error :messages="$errors->get('address')" class="mt-2" />
                    </div>

                    <div class="form-outline mb-4">
                      <input type="text" id="license" name="license" class="form-control form-control-lg">
                      <label class="form-label" for="license"  :value="__('License')" >License</label>
                      <x-input-error :messages="$errors->get('license')" class="mt-2" />
                    </div>

                    <div class="form-outline mb-4">
                      <input type="text" id="experience" name="experience" class="form-control form-control-lg">
                      <label class="form-label" for="experience"  :value="__('Experience')" >Experience</label>
                      <x-input-error :messages="$errors->get('experience')" class="mt-2" />
                    </div>

                    
                    <div class="form-outline mb-4">
                      <input type="number" id="cases_won" name="cases_won" class="form-control form-control-lg">
                      <label class="form-label" for="cases_won"  :value="__('Cases_Won')" >Cases Won</label>
                      <x-input-error :messages="$errors->get('cases_won')" class="mt-2" />
                    </div>

                    <div class="form-outline mb-4">
                     <label for="specialization">specialization:</label>
                         <select class="form-control" id="specialization" name="specialization">
                             <option value="option1">Divorce Law</option>
                             <option value="option2">Family Law</option>
        </select>
                    </div>
                
                    <div class="pt-1 mb-4">
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>
            <button class="btn btn-dark btn-lg btn-block">{{__('Register')}}</button>
                    </div>

              
                  </form>
  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End your project here-->

  <!-- MDB -->
  <script type="text/javascript" src="{{asset('assets-login/js/mdb.min.js')}}"></script>
  <!-- Custom scripts -->
  <script type="text/javascript"></script>
</body>

</html>