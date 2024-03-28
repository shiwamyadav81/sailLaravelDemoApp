<div class="bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="px-4 py-4 bg-gray-100">
        <h2 class="text-xl font-semibold text-gray-800">Real Time Notifications</h2>
    </div>
    <div class="p-4">
        @foreach ($uNotifications as $unotification)
            <div class="py-2">
                <p class="text-gray-700">New User Created: <apan class="font-bold text-cyan-400">
                        {{ $unotification }}
                </p>
            </div>
            <hr class="border-gray-300">
        @endforeach
    </div>
</div>
