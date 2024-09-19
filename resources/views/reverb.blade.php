<x-app-layout>

    <script>
        window.addEventListener('DOMContentLoaded', () => {
            window.Echo.join('presence')
                .here((users) => {
                    console.log(users);
                })
                .joining((user) => {
                    console.log(user);
                })
                .leaving((user) => {
                    console.log(user);
                })
        });
    </script>
</x-app-layout>
