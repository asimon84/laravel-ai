<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <table id="recordTable" class="table table-bordered stripe hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>String</th>
                    <th>Text</th>
                    <th>JSON</th>
                    <th>Boolean</th>
                    <th>Integer</th>
                    <th>Float</th>
                    <th width="100px">Action</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        {!! Vite::content('resources/js/dashboard.js') !!}
    </script>
</x-layouts.app>
