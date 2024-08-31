<!DOCTYPE html>
<html data-theme="lofi">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login - Risva Management</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <style>
        * {
            font-family: "Poppins", sans-serif;
        }
    </style>

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="antialiased font-sans">
    <div class="font-sans">
        <div class="relative min-h-screen flex flex-col sm:justify-center items-center bg-emerald-600 ">
            <div class="relative sm:max-w-sm w-full">
                <div class="card bg-blue-400 shadow-lg  w-full h-full rounded-3xl absolute  transform -rotate-6"></div>
                <div class="card bg-red-400 shadow-lg  w-full h-full rounded-3xl absolute  transform rotate-6"></div>
                <div class="relative w-full rounded-3xl  px-6 py-4 bg-gray-100 shadow-md">
                    <label for="" class="block mt-3 text-xl text-gray-700 text-center font-semibold">
                        RISVA MANAGEMENT
                    </label>
                    <?php if (session()->getFlashdata('pesan')) : ?>
                        <div class="bg-red-500 text-white text-sm p-2 mt-4 rounded-xl text-center">
                            <?= session()->getFlashdata('pesan'); ?>
                        </div>
                    <?php endif; ?>
                    <form method="post" action="<?= base_url('admin/auth'); ?>" class="mt-4">

                        <div>
                            <input type="email" placeholder="Email" name="email" class="mt-1 block w-full border-2 bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0 <?= isset(session()->get('validator')['email']) ? 'border-red-400' : ''; ?>">
                            <?php if (isset(session()->get('validator')['email'])) : ?>
                                <span class="text-red-500 text-sm mt-1"><?= session()->get('validator')['email']; ?></span>
                            <?php endif; ?>
                        </div>

                        <div class="mt-5">
                            <input type="password" placeholder="Password" name="password" class="mt-1 block w-full border-2 bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0 <?= isset(session()->get('validator')['password']) ? 'border-red-400' : ''; ?>">
                            <?php if (isset(session()->get('validator')['password'])) : ?>
                                <span class="text-red-500 text-sm mt-1"><?= session()->get('validator')['password']; ?></span>
                            <?php endif; ?>
                        </div>

                        <div class="flex mt-7 items-center text-center">
                            <hr class="border-gray-300 border-1 w-full rounded-md">
                            <label class="block font-medium text-sm text-gray-600 w-full">
                                Sign In
                            </label>
                            <hr class="border-gray-300 border-1 w-full rounded-md">
                        </div>

                        <div class="mt-7">
                            <button type="submit" class="bg-blue-500 w-full py-3 rounded-xl text-white shadow-xl hover:shadow-inner focus:outline-none transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                                Login
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>