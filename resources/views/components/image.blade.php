<table>
    <!-- Table headers -->
    <thead>
        <tr>
            <!-- Define table headers based on your column definitions -->
            <!-- Example: <th>Image</th> -->
        </tr>
    </thead>
    <!-- Table body -->
    <tbody>
        <!-- Loop through records to display table rows -->
        @foreach ($records as $record)
            <tr>
                <!-- Render table cells for each column -->
                <!-- Example: <td><img src="{{ $record->image }}" alt="Image"></td> -->
            </tr>
        @endforeach
    </tbody>
</table>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        // Attach click event handler to "view" action buttons
        $('.filament-view-action').on('click', function() {
            // Get the URL of the image from the data attribute
            var imageUrl = $(this).data('image-url');
            // Open the image in a new tab
            window.open(imageUrl, '_blank');
        });
    });
</script>
