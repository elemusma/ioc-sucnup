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
            zoom:5
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
            {, 
                location:{lat: 40.62568882714163, lng: -105.6283297543333},
                content:`<div class="pt-4 pb-3">
                <p>Larimer County</p>
                </div>`
            },
{
                location:{lat: 47.2872536, lng: -101.9241151},
                content:`<div class="pt-4 pb-3">
                <p>113 Main St<br>Zap, ND 58580</p>
                <a href="https://goo.gl/maps/rh5YjKNnJmeby4oV7" target="_blank">Click Here for Address</a>
                </div>`
            },
{
                location:{lat: 46.78306519, lng: -98.56428316},
                content:`<div class="pt-4 pb-3">
                <p>218 1st St<br>Ypsilanti, ND 58497</p>
                <a href="https://goo.gl/maps/h7NnBaDSxFXYx1fP6" target="_blank">Click Here for Address</a>
                </div>`
            },
{
                location:{lat: 41.10141193, lng: -80.77462499},
                content:`<div class="pt-4 pb-3">
                <p>6000 Mahoning Ave<br>Youngstown, OH 44515</p>
                <a href="https://goo.gl/maps/7td1bvopJx3WBMXy8" target="_blank">Click Here for Address</a>
                </div>`
            },
{
                location:{lat: 40.1105499, lng: -76.71404549},
                content:`<div class="pt-4 pb-3">
                <p>15 Pennsylvania ave<br>York Haven, PA 17370</p>
                <a href="https://goo.gl/maps/jFczUgY7SResHYpw5" target="_blank">Click Here for Address</a>
                </div>`
            },
{
                location:{lat: 42.91082275, lng: -85.69581253},
                content:`<div class="pt-4 pb-3">
                <p>2929 Michael Ave SW<br>Wyoming, MI 49509</p>
                <a href="https://goo.gl/maps/UnvbxpvzQMNnxx8JA" target="_blank">Click Here for Address</a>
                </div>`
            },
{
                location:{lat: 39.45391081, lng: -99.09887563},
                content:`<div class="pt-4 pb-3">
                <p>508 Main Street<br>Woodston, KS 67675</p>
                <a href="https://goo.gl/maps/pmiSiUJxFUjcGM2v7" target="_blank">Click Here for Address</a>
                </div>`
            },
{
                location:{lat: 35.77289429, lng: -80.58597027},
                content:`<div class="pt-4 pb-3">
                <p>4220 Potneck Rd<br>Woodleaf, NC 27054</p>
                <a href="https://goo.gl/maps/7qecYe3nRTMrdwyQ7" target="_blank">Click Here for Address</a>
                </div>`
            },
{
                location:{lat: 33.78009287, lng: -89.0516948},
                content:`<div class="pt-4 pb-3">
                <p>109 Market St<br>Woodland, MS 39776</p>
                <a href="https://goo.gl/maps/aou9W3uffaQmx7iA8" target="_blank">Click Here for Address</a>
                </div>`
            },
{
                location:{lat: 41.12566472, lng: -84.85669246},
                content:`<div class="pt-4 pb-3">
                <p>22133 Main St<br>Woodburn, IN 46797</p>
                <a href="https://goo.gl/maps/dR2cVHUCzMDJmC5J6" target="_blank">Click Here for Address</a>
                </div>`
            },
{
                location:{lat: 48.49991869, lng: -99.70487676},
                content:`<div class="pt-4 pb-3">
                <p>201 3rd Ave N<br>Wolford, ND 58385</p>
                <a href="https://goo.gl/maps/ZgDVDdN43DQnic1B8" target="_blank">Click Here for Address</a>
                </div>`
            },
{
                location:{lat: 41.40404142, lng: -94.8908262},
                content:`<div class="pt-4 pb-3">
                <p>405 Pioneer Ave<br>Wiota, IA 50274</p>
                <a href="https://goo.gl/maps/xwUtKt39gXojunSz9" target="_blank">Click Here for Address</a>
                </div>`
            },
{
                location:{lat: 32.73848652, lng: -114.6355844},
                content:`<div class="pt-4 pb-3">
                <p>2127 Winterhaven Drive<br>Winterhaven, CA 92283</p>
                <a href="https://goo.gl/maps/gAMxn5f1gKRuCGrJA" target="_blank">Click Here for Address</a>
                </div>`
            },
{
                location:{lat: 33.91103847, lng: -90.74994167},
                content:`<div class="pt-4 pb-3">
                <p>300 E Winston St<br>Winstonville, MS 38781</p>
                <a href="https://goo.gl/maps/nKzC6iBsBB9TsnAZ7" target="_blank">Click Here for Address</a>
                </div>`
            },
{
                location:{lat: 38.2110206, lng: -81.52952893},
                content:`<div class="pt-4 pb-3">
                <p>303 Fields Creek Rd<br>Winifrede, WV 25214</p>
                <a href="https://goo.gl/maps/CU4b4ofF8NB1Nhb66" target="_blank">Click Here for Address</a>
                </div>`
            },
{
                location:{lat: 42.07576941, lng: -75.64920873},
                content:`<div class="pt-4 pb-3">
                <p>652 Old Route 17<br>Windsor, NY 13865</p>
                <a href="https://goo.gl/maps/gtttMoNxWWvaUz937" target="_blank">Click Here for Address</a>
                </div>`
            },
{
                location:{lat: 41.53572495, lng: -80.9334099},
                content:`<div class="pt-4 pb-3">
                <p>5103 State Route 322<br>Windsor, OH 44099</p>
                <a href="https://goo.gl/maps/xxzG1CMeLx2yTSFBA" target="_blank">Click Here for Address</a>
                </div>`
            },
{
                location:{lat: 45.99731976, lng: -110.6607024},
                content:`<div class="pt-4 pb-3">
                <p>310 Elliot St N<br>Wilsall, MT 59086</p>
                <a href="https://goo.gl/maps/dEzwsGXFsZz8wmHA6" target="_blank">Click Here for Address</a>
                </div>`
            },
{
                location:{lat: 41.73704602, lng: -87.86942873},
                content:`<div class="pt-4 pb-3">
                <p>8448 Archer Ave<br>Willow Springs, IL 60480</p>
                <a href="https://goo.gl/maps/6WFLF32tdbMZ3bYd6" target="_blank">Click Here for Address</a>
                </div>`
            },
{
                location:{lat: 29.38823084, lng: -82.44868136},
                content:`<div class="pt-4 pb-3">
                <p>29 NW 1st Ave<br>Williston, FL 32696</p>
                <a href="https://goo.gl/maps/YoGpj3NoYzSs919k8" target="_blank">Click Here for Address</a>
                </div>`
            },
{
                location:{lat: 37.5155744, lng: -75.80611303},
                content:`<div class="pt-4 pb-3">
                <p>4457 Willis Wharf Rd<br>Willis Wharf, VA 23486</p>
                <a href="https://goo.gl/maps/BcAbkEJFUvPwdxX2A" target="_blank">Click Here for Address</a>
                </div>`
            },
{
                location:{lat: 40.28869989, lng: -87.2926422},
                content:`<div class="pt-4 pb-3">
                <p>115 East 2nd Street<br>Williamsport, IN 47993</p>
                <a href="https://goo.gl/maps/SnUwRmCBSswkNDdz5" target="_blank">Click Here for Address</a>
                </div>`
            },
{
                location:{lat: 48.63249986, lng: -103.1844997},
                content:`<div class="pt-4 pb-3">
                <p>507 Main St<br>Wildrose, ND 58795</p>
                <a href="https://goo.gl/maps/LRzk2CnXyDqF9jSe7" target="_blank">Click Here for Address</a>
                </div>`
            },
{
                location:{lat: 36.96523782, lng: -89.08991283},
                content:`<div class="pt-4 pb-3">
                <p>330 Court Street<br>Wickliffe, KY 42087</p>
                <a href="https://goo.gl/maps/MpUB3GYRQQEzWs2E9" target="_blank">Click Here for Address</a>
                </div>`
            },
{
                location:{lat: 46.98588463, lng: -104.1885776},
                content:`<div class="pt-4 pb-3">
                <p>211 S Wibaux Street<br>Wibaux, MT 59353</p>
                <a href="https://goo.gl/maps/ibkKzgCSn9tVbWxB6" target="_blank">Click Here for Address</a>
                </div>`
            },
{
                location:{lat: 35.44356844, lng: -100.2745605},
                content:`<div class="pt-4 pb-3">
                <p>507 S. Candian St<br>Wheeler, TX 79096</p>
                <a href="https://goo.gl/maps/3ky4yLQzAKqhHCCb9" target="_blank">Click Here for Address</a>
                </div>`
            },
{
                location:{lat: 37.89752314, lng: -81.67133893},
                content:`<div class="pt-4 pb-3">
                <p>35665 Pond Fork Rd<br>Wharton, WV 25208</p>
                <a href="https://goo.gl/maps/UWyQMo7sXgu1TvbEA" target="_blank">Click Here for Address</a>
                </div>`
            },
{
                location:{lat: 41.71029579, lng: -72.6621899},
                content:`<div class="pt-4 pb-3">
                <p>67 Beaver Road<br>Wethersfield, CT 6109</p>
                <a href="https://goo.gl/maps/6raTEy8dsQwJhHK97" target="_blank">Click Here for Address</a>
                </div>`
            },
{
                location:{lat: 40.75265094, lng: -78.6698127},
                content:`<div class="pt-4 pb-3">
                <p>103 Church<br>Westover, PA 16692</p>
                <a href="https://goo.gl/maps/BMVnCiaj9HBas1kT7" target="_blank">Click Here for Address</a>
                </div>`
            },
{
                location:{lat: 48.91021306, lng: -101.0206984},
                content:`<div class="pt-4 pb-3">
                <p>180 Main St<br>Westhope, ND 58793</p>
                <a href="https://goo.gl/maps/WZhhhzaWHTZuGXbW8" target="_blank">Click Here for Address</a>
                </div>`
            },
{
                location:{lat: 42.58046898, lng: -71.48887143},
                content:`<div class="pt-4 pb-3">
                <p>5 W Prescott St<br>Westford, MA 1886</p>
                <a href="https://goo.gl/maps/mNnw1i9fe7Zhvj588" target="_blank">Click Here for Address</a>
                </div>`
            },
{
                location:{lat: 43.88612146, lng: -89.49299607},
                content:`<div class="pt-4 pb-3">
                <p>108 E 2nd Street<br>Westfield, WI 53964</p>
                <a href="https://goo.gl/maps/g5KLnNf5FuWr43fs5" target="_blank">Click Here for Address</a>
                </div>`
            },
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