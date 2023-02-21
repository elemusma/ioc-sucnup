<?php

/**
 * Template Name: Service Areas
 */
get_header();

echo '<div id="map" style="height:750px;width:100%;"></div>';

?>

<script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAyR6Ob2Mrk2eZB8k0QYSVDThZ78cN3OeI&callback=initMap">
</script>

<script>
    function initMap() {
        // Map option
        var options = {
            center: {lat: 40.14775040259533, lng:-105.03824784895373}, 
            zoom:7
        }

        // New Map
        map = new google.maps.Map(document.getElementById("map"),options);

        
        // // InfoWindow
        // const infowindow = new google.maps.InfoWindow({
        //     content: `<div class="pt-4 pb-3">
        //     <p>5012 Buchanon Trail E<br>Zullinger, PA 17272</p>
        //     <a href="https://goo.gl/maps/HM1nCJbxXdLiP6w69" target="_blank">Click Here for Address</a>
        //     </div>`,
        //     // ariaLabel: "First Address",
        // });

        // // Marker
        // const marker = new google.maps.Marker({
        //     position: {lat: 39.76786030574004, lng: -77.62187373050699},
        //     map:map,
        //     // title: "Uluru (Ayers Rock)",
        //     // icon:"https://img.icons8.com/nolan/2x/marker.png" // to add a custom marker
        // })

        // =============

        // Add Markers to Array
        let MarkerArray = [
            {
                location:{lat: 40.62568882714163, lng: -105.6283297543333},
                content:`<div class="pt-4 pb-3">
                <p>Larimer County</p>
                </div>`
            }
            ,
            {
                location:{lat: 40.422479058883425, lng: -104.71610141627593},
                content:`<div class="pt-4 pb-3">
                <p>Weld County</p>
                </div>`
            }
            ,
            {
                location:{lat: 40.10640710602241, lng: -105.53702327265162},
                content:`<div class="pt-4 pb-3">
                <p>Boulder County</p>
                </div>`
            }
            ,
            {
                location:{lat: 39.56718029694562, lng: -105.53719019299754},
                content:`<div class="pt-4 pb-3">
                <p>Jefferson County</p>
                </div>`
            }
            ,
            {
                location:{lat: 39.365551491854596, lng: -105.01406272556181},
                content:`<div class="pt-4 pb-3">
                <p>Douglas County</p>
                </div>`
            }
            ,
            {
                location:{lat: 39.56190909301069, lng: -105.10112204635874},
                content:`<div class="pt-4 pb-3">
                <p>Arapahoe County</p>
                </div>`
            }
            ,
            {
                location:{lat: 40.26962488702729, lng: -103.8020369316658},
                content:`<div class="pt-4 pb-3">
                <p>Morgan County</p>
                </div>`
            }
            ,
            {
                location:{lat: 40.833866006753055, lng: -103.83161219245657},
                content:`<div class="pt-4 pb-3">
                <p>Logan County</p>
                </div>`
            }
            ,
            {
                location:{lat: 39.99652322315774, lng: -103.22716167969601},
                content:`<div class="pt-4 pb-3">
                <p>Washington County</p>
                </div>`
            }
            ,
            {
                location:{lat: 40.021461008359246, lng: -102.44889277343778},
                content:`<div class="pt-4 pb-3">
                <p>Yuma County</p>
                </div>`
            }
            ,
            {
                location:{lat: 40.59041201135185, lng: -102.3206773746202},
                content:`<div class="pt-4 pb-3">
                <p>Phillips County</p>
                </div>`
            }
            ,
            {
                location:{lat: 40.88262895458922, lng: -102.37469843986578},
                content:`<div class="pt-4 pb-3">
                <p>Sedgwick County</p>
                </div>`
            }
            ,
            {
                location:{lat: 39.88103858291775, lng: -104.32197277360218},
                content:`<div class="pt-4 pb-3">
                <p>Adams County</p>
                </div>`
            }
            ,
            {
                location:{lat: 39.92269213810083, lng: -105.08202923157928},
                content:`<div class="pt-4 pb-3">
                <p>Broomfield County</p>
                </div>`
            }
            ,
            {
                location:{lat: 38.81552241321197, lng: -102.57319621778669},
                content:`<div class="pt-4 pb-3">
                <p>Cheyenne County</p>
                </div>`
            }
            ,
            {
                location:{lat: 38.98466130284379, lng: -103.48973716177119},
                content:`<div class="pt-4 pb-3">
                <p>Lincoln County</p>
                </div>`
            }
            ,
            {
                location:{lat: 40.69498898757395, lng: -106.3020965672491},
                content:`<div class="pt-4 pb-3">
                <p>Jackson County</p>
                </div>`
            }
            ,
            {
                location:{lat: 40.1279521630236, lng: -106.11219114775578},
                content:`<div class="pt-4 pb-3">
                <p>Grand County</p>
                </div>`
            }
            ,
            {
                location:{lat: 39.69830902647619, lng: -105.6872172322019},
                content:`<div class="pt-4 pb-3">
                <p>Clear Creek County</p>
                </div>`
            }
            ,
            {
                location:{lat: 39.1314317224736, lng: -105.76684730928415},
                content:`<div class="pt-4 pb-3">
                <p>Park County</p>
                </div>`
            }
            ,
            {
                location:{lat: 39.32570771296275, lng: -104.14847540160054},
                content:`<div class="pt-4 pb-3">
                <p>Elbert County</p>
                </div>`
            }
            ,
            {
                location:{lat: 38.842645677492165, lng: -104.56597190389216},
                content:`<div class="pt-4 pb-3">
                <p>El Paso County</p>
                </div>`
            }
            ,
            {
                location:{lat: 38.25244401868309, lng: -104.6018762122677},
                content:`<div class="pt-4 pb-3">
                <p>Pueblo County</p>
                </div>`
            }
        ]

        // for loop
        for (i = 0; i < MarkerArray.length; i++) {
            addMarker(MarkerArray[i])
        }

        // Add Markers
        function addMarker(props){
            const marker = new google.maps.Marker({
                position:props.location,
                map:map,
                content:props.content,
                animation: google.maps.Animation.DROP
                // title: "Uluru (Ayers Rock)",
                // icon:"https://img.icons8.com/nolan/2x/marker.png" // to add a custom marker
            })
            const infowindow = new google.maps.InfoWindow({
                content: props.content,
                // ariaLabel: "First Address",
            });

            if(props.content){
                marker.addListener("click", () => {
                    infowindow.open({
                        anchor: marker,
                        map,
                    });
                });
            } // end of if statement for content

        } // addMarker function


        // addMarker({
        //     location:{lat: 39.76786030574004, lng: -77.62187373050699},
        //     content:`<div class="pt-4 pb-3">
        //     <p>5012 Buchanon Trail E<br>Zullinger, PA 17272</p>
        //     <a href="https://goo.gl/maps/HM1nCJbxXdLiP6w69" target="_blank">Click Here for Address</a>
        //     </div>`
        // });


    }
    window.initMap = initMap;
</script>

<?php
get_footer();
?>