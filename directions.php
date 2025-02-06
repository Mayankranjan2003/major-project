<?php
$api_key = 'AlzaSyx8ZZshF9bhl-zWcydZHhr9VhnHCcpAHQv';
$error = '';
$directions = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $origin = urlencode($_POST['origin']);
    $destination = urlencode($_POST['destination']);
    
    $url = "https://maps.gomaps.pro/maps/api/directions/json?origin={$origin}&destination={$destination}&key={$api_key}";
    
    $response = file_get_contents($url);
    $data = json_decode($response, true);
    
    if ($data['status'] === 'OK') {
        $directions = $data['routes'][0]['legs'][0];
    } else {
        $error = 'Unable to find directions. Please try again.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Direction Search</title>
    <script src="https://maps.gomaps.pro/maps/api/js?key=<?php echo $api_key; ?>"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        #map { height: 400px; }
        @media (min-width: 768px) { #map { height: 100%; } }
    </style>
</head>
<body class="bg-gray-100 min-h-screen">
    <div class="container mx-auto p-4 flex flex-col min-h-screen">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h1 class="text-2xl font-bold text-center mb-4">Direction Search</h1> 
            <form method="POST" class="space-y-4">
                <div class="flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-2">
                    <div class="relative flex-grow">
                        <svg class="w-5 h-5 text-gray-400 absolute left-3 top-1/2 transform -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        <input type="text" name="origin" placeholder="Enter origin" required class="w-full pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-blue-500">
                    </div>
                    <div class="relative flex-grow">
                        <svg class="w-5 h-5 text-gray-400 absolute left-3 top-1/2 transform -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path></svg>
                        <input type="text" name="destination" placeholder="Enter destination" required class="w-full pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-blue-500">
                    </div>
                </div>
                <button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Search Directions
                </button>
            </form>
        </div>

        <?php if ($error): ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline"><?php echo $error; ?></span>
            </div>
        <?php endif; ?>

        <div class="grid gap-4 md:grid-cols-2 flex-grow">
            <div id="map" class="bg-white shadow-md rounded md:order-2"></div>

            <?php if ($directions): ?>
                <div class="bg-white shadow-md rounded p-4 overflow-auto md:order-1">
                    <h2 class="text-xl font-bold mb-2">Directions</h2>
                    <div class="flex justify-between text-sm font-medium mb-4">
                        <span>Total Distance: <?php echo $directions['distance']['text']; ?></span>
                        <span>Estimated Time: <?php echo $directions['duration']['text']; ?></span>
                    </div>
                    <ol class="list-decimal list-inside space-y-2">
                        <?php foreach ($directions['steps'] as $step): ?>
                            <li class="text-sm">
                                <?php echo $step['html_instructions']; ?>
                                <span class="text-gray-500 ml-2">
                                    (<?php echo $step['distance']['text']; ?>, <?php echo $step['duration']['text']; ?>)
                                </span>
                            </li>
                        <?php endforeach; ?>
                    </ol>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <script>
        function initMap() {
            const map = new google.maps.Map(document.getElementById('map'), {
                center: { lat: 0, lng: 0 },
                zoom: 2
            });

            <?php if ($directions): ?>
                const directionsService = new google.maps.DirectionsService();
                const directionsRenderer = new google.maps.DirectionsRenderer();
                directionsRenderer.setMap(map);

                const request = {
                    origin: '<?php echo $_POST['origin']; ?>',
                    destination: '<?php echo $_POST['destination']; ?>',
                    travelMode: 'DRIVING'
                };

                directionsService.route(request, function(result, status) {
                    if (status === 'OK') {
                        directionsRenderer.setDirections(result);
                    }
                });
            <?php endif; ?>
        }

        initMap();
    </script>
</body>
</html>