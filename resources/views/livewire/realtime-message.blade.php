<div class="bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="px-4 py-4 bg-gray-100">
        <h2 class="text-xl font-semibold text-gray-800">Notification List of Users Getting Registered</h2>
    </div>
    <div class="p-4">
        @foreach ($uNotifications as $notification)
            <div class="flex items-center py-2">
                <img class="h-8 w-8 mr-2" src="{{ asset('images/user.png') }}" alt="User avatar">
                <p class="text-cyan-600 font-bold">{{ $notification }}</p>
            </div>
            <hr class="border-gray-300">
        @endforeach
    </div>

</div>
