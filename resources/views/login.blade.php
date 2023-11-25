
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<head></head>
<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: poppins,sans-serif;

}
body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: #0a0008;


}
.wrapper{
    position: relative;
    width: 750px;
    height: 450px;
    background: transparent;
    border: 2px solid rgb(0, 0, 0);
    box-shadow: 0 0 25px rgb(3, 57, 15);
    overflow: hidden;


}
.wrapper .form-box {
    position: absolute;
    top: 0;
    width: 50%;
    height: 100%;

    display: flex;
    flex-direction: column;
    justify-content: center;

}

.wrapper .form-box.login{
    left: 0;
    padding: 0 60px 0 40px;
}

.form-box h2{
    font-size: 32px;
    color: #fff;
    text-align: center;
}

.form-box .input-box {
    position: relative;
    width: 100%;
    height: 50px;

    margin: 25px 0;

}

.input-box input {
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    border-bottom: 2px solid #fff;
    transition: .5s;
    color: #fff;
    font-size: 16px;
    font-weight: 500;
    padding-right: 23px;

}

.input-box input:focus
.input-box input:valid {
    border-bottom-color: rgb(166, 238, 177);


}

.input-box label {
    position: absolute;
    top: 50%;
    left: 0;
    transform: translateY(-50%);
    font-size: 16px;
    color: #fff;
    pointer-events: none;
    transition: .5s;
}

.input-box input:focus~label,
.input-box input:valid~label{
    top: -5px;
    color: rgb(199, 228, 163);

}


.input-box i {
    position: absolute;
    top: 50%;
    right: 0;
    transform: translateY(-50%);
    font-size: 18px;
    color: #fff;
    transition: .5s;

}

.input-box input:focus~i,
.input-box input:valid~i{
    color: rgb(241, 226, 166);
}

.btn {
    position: relative;
    width: 100%;
    height: 45px;
    background: transparent;
    border: 2px solid rgb(238, 210, 166);
    outline: none;
    border-radius: 40px;
    cursor: pointer;
    font-size: 16px;
    color: #fff;
    font-weight: 600;
    z-index: 1;
    overflow: hidden;

}

.btn::before {
    content: '';
    position: absolute;
    top: -100%;
    left: 0;
    width: 100%;
    height: 300%;
    background:linear-gradient(#20e40e,rgb(219, 168, 230),#411044,rgb(175, 171, 92));
    z-index: -1;
    transition:.5s;
}

.btn:hover::before{
    top: 0 ;
}

.form-box .logreg-link {
  font-size: 14.5px;
  color: #fff;
  text-align: center;
  margin: 20px 0 10px;

}

.logreg-link p a {
    color:#0ef ;
    text-decoration: none;
    font-weight: 600;
}

.logreg-link p a:hover{
    text-decoration: underline;
}

.wrapper .info-text{
    position: absolute;
    top: 0;
    width: 50%;
    height: 100%;

    display: flex;
    flex-direction: column;
    justify-content: center;

}

.wrapper .info-text.login {
    right: 0;
    text-align: right;
    padding: 0 40px 60px 150px;
}

.info-text h2{
    font-size: 36;
    color: #fff;
    line-height: 1.3;
    text-transform: uppercase;

}

.info-text p {
    font-size: 16;
    color: #fff;
}

.wrapper .bg-animate {
    position: absolute;
    top:-4px;
    right: 0;
    width: 850px;
    height: 600px;
    border-bottom: 3px solid #0ef;
    background: linear-gradient(#200ee4,rgb(219, 168, 230),#411044,rgb(92, 175, 109));
    transform: rotate(10deg) skewY(40deg);
    transform-origin: bottom right;
}
</style>
<body>
    <div class="wrapper">
<span class="bg-animate"></span>

<div class="form-box login">

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <!-- <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div> -->

        <div class="input-box">
                    <input type="text" id="email" name="email" required>
                    <label for="email">Username</label>
                    <i class='bx bxs-user'></i>
                </div>

        <!-- Password -->
        <!-- <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" /> -->

            <!-- <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div> -->

        <div class="input-box">
                    <input id="password" name="password" type="password" required>
                    <label for="">Pasword</label>
                    <i class='bx bxs-lock-alt' ></i>
                </div>

        <!-- Remember Me -->


        <div >


            <button type="submit" class="btn">{{ __('Log in') }}</button>
        </div>
    </form>
</div>
    <div class="info-text login">
             <h2>HAPPY SHOP  HELLO!!...</h2>
             {{-- <p>Haque Pharma</p> --}}
        </div>
</body>
