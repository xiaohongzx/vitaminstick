// script.js
      let map;
      const stores = [
        {
          name: "Château Dc Sky Forest",
          address:"Unit 2-A No, Sky Forest@1powerhouse, 1, Persiaran Bandar Utama, Bandar Utama, 47800 Petaling Jaya, Selangor",
          options: "Buy at cashier",
          hours:
            "<li>Monday <b>5pm-1am</b></li><li>Tuesday <b>5pm-1am</b></li><li>Wednesday <b>5pm-1am</b></li><li>Thursday <b>5pm-1am</b></li><li>Friday <b>8pm-1am</b></li><li>Saturday <b>8pm-1am</b></li><li>Sunday <b>Closed</b></li>",
          position: { lat: 3.1451396, lng: 101.6179907 },
          img: "images/store_chateauSkyForest.png",
        },
        {
          name: "Château DeCanter",
          address:
            "55B, Jalan SS 21/56b, Damansara Utama, 47400 Petaling Jaya, Selangor",
          options: "Buy at cashier",
          hours:
            "<li>Monday <b>4pm-1am</b></li><li>Tuesday <b>4pm-1am</b></li><li>Wednesday <b>4pm-1am</b></li><li>Thursday <b>4pm-1am</b></li><li>Friday <b>4pm-1am</b></li><li>Saturday <b>4pm-1am</b></li><li>Sunday <b>4pm-1am</b></li>",
          position: { lat: 3.137728, lng: 101.6213029 },
          img: "images/store_chateauDecanter.jpg",
        },
        {
          name: "Château DC X",
          address:
            "3-30A-1, Viva Shopping mall, 85, Jln Loke Yew, Taman Miharja, 55200 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur",
          options: "Vending Machine",
          hours:
            "<li>Monday <b>8pm-3am</b></li><li>Tuesday <b>8pm-3am</b></li><li>Wednesday <b>8pm-3am</b></li><li>Thursday <b>8pm-3am</b></li><li>Friday <b>8pm-3am</b></li><li>Saturday <b>8pm-3am</b></li><li>Sunday <b>8pm-3am</b></li>",
          position: { lat: 3.1224948, lng: 101.7189041 },
          img: "images/store_chateauDCX.png",
        },
        {
          name: "Honey Bunny - Pong Bar",
          address:
            "GS-13, 3 Damansara , No.3, Jalan SS20/27, Petaling Jaya (North), 47400 3, 47400 Petaling Jaya, Selangor",
          options: "Buy at cashier",
          hours:
            "<li>Monday <b>2.30pm-1am</b></li><li>Tuesday <b>2.30pm-1am</b></li><li>Wednesday <b>2.30pm-1am</b></li><li>Thursday <b>2.30pm-1am</b></li><li>Friday <b>2.30pm-1am</b></li><li>Saturday <b>2.30pm-1am</b></li><li>Sunday <b>Closed</b></li>",
          position: { lat: 3.1310078, lng: 101.6257376 },
          img: "images/store_honeybunny.png",
        },
      ];

      function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
          center: { lat: 3.1104542, lng: 101.6657394 },
          zoom: 4,
          scrollwheel: true,
        });

        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(
            (position) => {
              const userLocation = {
                lat: position.coords.latitude,
                lng: position.coords.longitude,
              };
              map.setCenter(userLocation);
              map.setZoom(11);

              new google.maps.Marker({
                position: userLocation,
                map: map,
                title: "Your Location",
              });

              stores.forEach((store) => {
                const marker = new google.maps.Marker({
                  position: store.position,
                  map: map,
                  title: store.name,
                  icon: {
                    url: "images/map_pointer.png",
                    scaledSize: new google.maps.Size(50, 60),
                  },
                });

                const infoWindow = new google.maps.InfoWindow({
                  content: '<div class="map_location"><div class="name">'${store.name}'</div><img src="'${store.img}'" alt="'${store.name}'" style="width:200px;height:auto;"></div>',
                });

                marker.addListener("click", () => {
                  infoWindow.open(map, marker);
                });

                addStoreToSidebar(store);
              });
            },
            () => {
              alert("Geolocation failed. Using default location.");
              loadStoresOnMap();
            }
          );
        } else {
          alert(
            "Geolocation not supported by this browser. Using default location."
          );
          loadStoresOnMap();
        }
      }

      function loadStoresOnMap() {
        stores.forEach((store) => {
          const marker = new google.maps.Marker({
            position: store.position,
            map: map,
            title: store.name,
            icon: {
              url: "http://maps.google.com/mapfiles/ms/icons/red-dot.png",
            },
          });

          const infoWindow = new google.maps.InfoWindow({
            content: '<div class="map_location"><div class="name">'${store.name}'</div><img src="'${store.img}'" alt="'${store.name}'" style="width:100px;height:auto;"></div>',
          });

          marker.addListener("click", () => {
            infoWindow.open(map, marker);
          });

          addStoreToSidebar(store);
        });
      }

      function addStoreToSidebar(store) {
        const storeList = document.getElementById("store-list");
        const storeDiv = document.createElement("div");
        storeDiv.classList.add("store");
        storeDiv.innerHTML = '<div class="storelist_name">'${store.name}'</div><div class="storelist_address">'${store.address}'</div><div class="storelist_purchase">Option : <b>'${store.options}'</b></div><div class="storelist_hour">Working Hour : <ul>'${store.hours}'</ul></div><button onclick="copyAddress("'${store.address}'")">Copy Address</button><button onclick="openInWaze('${store.position.lat}, ${store.position.lng})'">Open in Waze</button>';
        storeList.appendChild(storeDiv);
      }

      function copyAddress(address) {
        navigator.clipboard.writeText(address).then(
          () => {
            alert("Address copied to clipboard");
          },
          (err) => {
            console.error("Failed to copy address: ", err);
          }
        );
      }

      function openInWaze(lat, lng) {
        window.open(
          'https://waze.com/ul?ll='${lat}','${lng}'&navigate=yes',
          "_blank"
        );
      }