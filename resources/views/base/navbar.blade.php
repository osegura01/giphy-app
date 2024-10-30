<nav class="fixed top-0 left-0 w-full bg-gray-800 h-16 min-h-[64px] z-50">
    <div class="h-full flex items-center justify-between max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center">
            <div class="flex-shrink-0">
                <svg class="h-8 w-8 text-white" viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <!-- Your SVG path here -->
                </svg>
            </div>
            <div class="md:block">
                <div class="ml-10 flex items-baseline space-x-4">
                    <a href="/" class="text-gray-300 hover:bg-gray-700 hover:text-gray px-3 py-2 rounded-md text-sm font-medium">Home</a>
                    @guest
                    <a href="/login" class="text-gray-300 hover:bg-gray-700 hover:text-gray px-3 py-2 rounded-md text-sm font-medium">Login</a>
                    @endguest
                    @auth
                    <a href="/dashboard" class="text-gray-300 hover:bg-gray-700 hover:text-gray px-3 py-2 rounded-md text-sm font-medium">Dashboard</a>
                    <a href="/logout" class="text-gray-300 hover:bg-gray-700 hover:text-gray px-3 py-2 rounded-md text-sm font-medium">Logout</a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</nav>
