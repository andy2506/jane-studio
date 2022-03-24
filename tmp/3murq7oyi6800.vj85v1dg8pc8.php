        <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCa0TJ-zLriG_am3uOitXWQ3woEEvFromE&callback=initMap&v=weekly&channel=2"
            async
        ></script>
        <script type="text/javascript">
            // Initialize and add the map
            function initMap() {
            // The location of Uluru
            const uluru = { lat: 51.5027999, lng: -0.0918174 };
            // The map, centered at Uluru
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 15,
                center: uluru,
            });
            // The marker, positioned at Uluru
            const marker = new google.maps.Marker({
                position: uluru,
                map: map,
            });
            }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>