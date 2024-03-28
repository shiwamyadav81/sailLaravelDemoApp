<div class="bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="px-4 py-4 bg-gray-100">
        <h2 class="text-xl font-semibold text-gray-800">Notifications</h2>
    </div>
    <div class="p-4">
        @foreach ($uNotifications as $notification)
            <div class="py-2">
                <p class="text-gray-700">{{ $notification }}</p>
            </div>
            <hr class="border-gray-300">
        @endforeach
    </div>
</div>
