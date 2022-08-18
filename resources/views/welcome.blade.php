<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="flex justify-center items-center h-screen bg-slate-200">
        <div id="form" class="block bg-slate-50 p-6 rounded-xl shadow-md shadow-slate-300 w-96">
        <form action="signup" method="post">
            @csrf
            <h2 class="text-blue-700 text-3xl font-semibold my-4">Register</h2>
            @if($errors->any())
            <span class="text-xs py-2 text-red-700">{{$errors->first()}}</span>
            @endif

            @if(!empty($tika))
            <span class="text-xs py-2 text-green-700">{{$tika}}</span>
            @endif

            <div id="fullname" class="flex flex-row">
                <div id="firstName" class="w-1/2 mr-1">
                    <label for="fname" class="text-sm">First Name</label><br>
                    <input type="text" name="first_name" id="fname" class="h-8 w-full rounded-md border border-slate-300 text-sm pl-2 bg-transparent outline-blue-600 shadow-sm">
                </div>
                <div id="lastName" class="w-1/2 ml-1">
                    <label for="lname" class="text-sm">Last Name</label><br>
                    <input type="lname" name="last_name" id="lname" class="h-8 w-full rounded-md border border-slate-300 text-sm pl-2 bg-transparent outline-blue-600 shadow-sm">
                </div>
            </div>

            <label for="email" class="text-sm">Email</label><br>
            <input type="text" name="email" id="email" class="h-8 w-full rounded-md border border-slate-300 text-sm pl-2 bg-transparent outline-blue-600 shadow-sm"><br>

            <label for="password" class="text-sm">Password</label><br>
            <input type="password" name="password" id="password" class="h-8 w-full rounded-md border border-slate-300 text-sm pl-2 bg-transparent outline-blue-600 shadow-sm"><br>

            <label for="confirmPassword" class="text-sm">Confirm Password</label><br>
            <input type="password" name='confirm_password' id="confirmPassword" class="h-8 w-full rounded-md border border-slate-300 text-sm pl-2 bg-transparent outline-blue-600 shadow-sm"><br>

            <div id="gender" class="text-sm mb-2">
                <p class="mt-2">Gender</p>
                <input type="radio" name="gender" id="male" class="text-sm mx-1" value="m" checked><label for="male">Male</label>
                <input type="radio" name="gender" id="female" class="text-sm mx-1" value="f"><label for="female">Female</label>
                <input type="radio" name="gender" id="other" class="text-sm mx-1" value="o"><label for="other">Other</label>
            </div>

            <input id="signup" type="submit" value="Sign Up" name="signup" class="bg-blue-700 w-full h-10 cursor-pointer text-white rounded-md hover:bg-blue-600 hover:outline outline-2 outline-blue-600 outline-offset-2 text-sm "><br>
            <p class="text-xs my-2">Already have a account? <a href="#" class="text-blue-600">Login</a></p>
        </form>
    </div>
    </div>
</body>
</html>