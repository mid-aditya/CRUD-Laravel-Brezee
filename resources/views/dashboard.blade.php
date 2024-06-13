<x-app-layout>
    <style>
        .notification {
    position: fixed;
    top: 20px;
    right: 20px;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    display: none;
    animation: slideIn 0.5s ease-in-out forwards;
}

.notification-content {
    color: #333;
}

.close {
    position: absolute;
    top: 10px;
    right: 10px;
    cursor: pointer;
}

@keyframes slideIn {
    from {
        transform: translateY(100%);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}
    .button {
        display: inline-block;
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
        border-radius: 4px;
        transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
    }

    .button:hover {
        background-color: #0056b3;
    }


    </style>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div id="notification" class="notification">
                    <span class="close" onclick="closeNotification()">&times;</span>
                        <div class="notification-content">
                    {{ __("Login Sukses Bang!") }}
                </div>
            </div>
        </div>

        <p><a href="videos" class="button">Valorant</a></p><br>
        <p><a href="dota" class="button">Dota</a></p><br>
        <p><a href="game" class="button">Tutorial Game</a></p><br>
        <p><a href="/" class="button">Back</a></p>
        
    </div>
</div>

    <script>
        // Fungsi untuk menutup notifikasi
// Munculkan notifikasi setelah halaman dimuat
document.addEventListener('DOMContentLoaded', function() {
    var notification = document.getElementById('notification');
    notification.style.display = 'flex'; // Mengubah display menjadi flex untuk menampilkan notifikasi

    // Setelah 3 detik, panggil fungsi closeNotification untuk menghilangkan notifikasi
    setTimeout(function() {
        closeNotification();
    }, 3000);
});

// Fungsi untuk menutup notifikasi
function closeNotification() {
    var notification = document.getElementById('notification');
    notification.style.animation = 'slideOut 0.5s ease-in-out forwards';

    // Setelah animasi selesai, hapus notifikasi dari DOM
    setTimeout(function() {
        notification.remove();
    }, 500);
}

    </script>
</x-app-layout>
