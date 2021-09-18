<!DOCTYPE html>
<html>
<header>
<title>Laptop - Search</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" sizes="16x16" href="./img/favicon.png">
<link rel="stylesheet" href="./style.css">
<script src="./script.js"></script>
</header>
<body>

<ul class="nav">
	<li><a href="javascript:Menu();"><img class="navbtn" src="./img/menu.svg" alt="Menu"></a></li>
	<div class="logoholder1"><a href="./"><img class="logo" src="./img/logo1.png" alt="Laptop"></a></div>
	<div class="logoholder2"><a href="./"><img class="logo" src="./img/logo2.png" alt="Laptop"></a></div>
	<ul class="navsearch">
		<li>
			<form id="search" action="./search.php" method="get">
				<input id="searchbar" type="text" placeholder="Search..." name="keyword">
			</form>
		</li>
		<button class="navsearchbtn" type="submit" form="search" value="Submit"><img height="100%" src="./img/search.svg" alt="Search"></button>
	</ul>
	<li><a href="./login.php"><img class="navbtn" src="./img/account.svg" alt="Account"></a></li>
	<li><a href="./cart.php"><img class="navbtn" src="./img/cart.svg" alt="Shopping cart"></a></li>
</ul>

<ul id="menu">
	<div class="menuaccount">
		<img src="./img/account.svg" alt="Account" width="100%">
		<div>
		<h3>User</h3>
		</div>
	</div>
	<li><a class="menutitle">Range</a></li>
	<li><a class="menubtn" href="./search.php?range=low">Low-end</a></li>
	<li><a class="menubtn" href="./search.php?range=mid">Mid-end</a></li>
	<li><a class="menubtn" href="./search.php?range=high">High-end</a></li>
	<li><a class="menutitle">Categories</a></li>
	<li><a class="menubtn" href="./search.php?category=best-value">Best value<br><small>(cost/performance ratio)</small></a></li>
	<li><a class="menubtn" href="./search.php?category=portability">For high portability</a></li>
	<li><a class="menubtn" href="./search.php?category=gaming">For gaming</a></li>
	<li><a class="menubtn" href="./search.php?category=content-creation">For content creation</a></li>
	<li><a class="menubtn" href="./search.php?category=business">For business</a></li>
	<li><a class="menutitle">More</a></li>
	<li><a class="menubtn" href="./sitemap.html">Sitemap</a></li>
	<li><a class="menubtn" href="./about.html">About us</a></li>
</ul>

<div id="main">
	<div class="resultnav">
		<p id="resultcount">
		<?php
		$keyword = $_GET['keyword'];
		$range = $_GET['range'];
		$category = $_GET['category'];
		$filter = $_GET['filter'];
		$lprice = $_GET['lprice'];
		$hprice = $_GET['hprice'];
		$brand = $_GET['brand'];

		if (isset($_GET['range'])) {
			if ($_GET['range'] == "low") {
				echo "product range: Low-end";
			} else if ($_GET['range'] == "mid") {
				echo "product range: Mid-end";
			} else if ($_GET['range'] == "high") {
				echo "product range: High-end";
			} else {
				echo "{$range}";
			}
		} else if (isset($_GET['category'])) {
			if ($_GET['category'] == "best-value") {
				echo "product category: best value";
			} else if ($_GET['category'] == "portability") {
				echo "product category: high portability";
			} else if ($_GET['category'] == "gaming") {
				echo "product category: gaming";
			} else if ($_GET['category'] == "content-creation") {
				echo "product category: content creation";
			} else if ($_GET['category'] == "business") {
				echo "product category: business";
			} else {
				echo "{$category}";
			}
		} else {
			echo "{$keyword}";
		}
		?>
		</p>
		<button class="filterbtn" id="filterbtn" onclick="FilterDiv()"><img src="./img/filter.svg" alt="Search" height="100%"></button>
	</div>
	
	<div class="resultcontent">
		<div id="resultfilter">
			<b>Price</b><br>
			<div class="filtergroup">
				<input id="pricelow" type="text" placeholder="Lowest price" name="pricelow">
				<input id="pricehigh" type="text" placeholder="Highest price" name="pricehigh">
			</div><br>
			
			<b>Brand</b><br>
			<input type="checkbox" id="ASUS" name="ASUS">
			<label for="ASUS">ASUS</label><br>
			<input type="checkbox" id="Apple" name="Apple">
			<label for="Apple">Apple</label><br>
			<input type="checkbox" id="DELL" name="DELL">
			<label for="DELL">DELL</label><br>
			<input type="checkbox" id="HP" name="HP">
			<label for="HP">HP</label><br>
			<input type="checkbox" id="Microsoft" name="Microsoft">
			<label for="Microsoft">Microsoft</label><br><br>

			<button class="filterapplybtn" onclick="AdvanceSearch()">Advanced search</button><br><br>
			
			<b>OS</b><br>
			<a class="filterlink" id="OS1">Windows</a><br>
			<a class="filterlink" id="OS2">macOS</a><br><br>
			
			<b>CPU</b><br>
			<a class="filterlink" id="CPU1">Intel Core i3</a><br>
			<a class="filterlink" id="CPU2">Intel Core i5</a><br>
			<a class="filterlink" id="CPU3">Intel Core i7</a><br>
			<a class="filterlink" id="CPU4">Intel Core i9</a><br>
			<a class="filterlink" id="CPU5">AMD Ryzen 3</a><br>
			<a class="filterlink" id="CPU6">AMD Ryzen 5</a><br>
			<a class="filterlink" id="CPU7">AMD Ryzen 7</a><br>
			<a class="filterlink" id="CPU8">AMD Ryzen 9</a><br><br>
			
			<b>GPU</b><br>
			<a class="filterlink" id="GPU1">NVIDIA GeForce RTX</a><br><br>
			
			<b>RAM</b><br>			
			<a class="filterlink" id="RAM1">4GB</a><br>
			<a class="filterlink" id="RAM2">8GB</a><br>
			<a class="filterlink" id="RAM3">16GB</a><br>
			<a class="filterlink" id="RAM4">32GB</a><br><br>
			
			<b>Storage</b><br>
			<a class="filterlink" id="Storage1">256GB or below</a><br>
			<a class="filterlink" id="Storage2">512GB</a><br>
			<a class="filterlink" id="Storage3">1TB or above</a><br><br>
			
			<b>Screen</b><br>
			<a class="filterlink" id="Screen1">1080P</a><br>
			<a class="filterlink" id="Screen2">2K</a><br>
			<a class="filterlink" id="Screen3">4K</a><br><br>

			<b>Battery</b><br>
			<a class="filterlink" id="Battery1">below 50Wh</a><br>
			<a class="filterlink" id="Battery2">51 Wh - 70Wh</a><br>
			<a class="filterlink" id="Battery3">above 70 Wh</a><br><br>

			<b>Weight</b><br>
			<a class="filterlink" id="Weight1">below 1 kg</a><br>
			<a class="filterlink" id="Weight2">1 kg - 1.5 kg</a><br>
			<a class="filterlink" id="Weight3">1.5 kg - 2 kg</a><br>
			<a class="filterlink" id="Weight4">above 2 kg</a><br><br>
		</div>
		
		<div id="resultmain">
		
		<!-- EXAMPLE:
			<article>
				<img src="./products/img/ASUS ROG Zephyrus G14.jpg" width="100%">
				<div>
					<h3>ROG Zephyrus G14</h3>
					<p><small>HKD$</small>14998</p>
					<small><b>CPU:</b> AMD Ryzen™ 9 4900HS</small><br>
					<small><b>GPU:</b> NVIDIA® GeForce RTX™ 2060 Max-Q</small>
				</div>
			</article>
		-->
		</div>
	</div>
	
	<script>
	var File = new XMLHttpRequest();
	var content;
    File.open("GET", "./products/database.txt", false);
    File.onreadystatechange = function ()
    {
        if(File.readyState === 4)
        {
            if(File.status === 200 || File.status == 0)
            {
                content = File.responseText;
            }
        }
    }
    File.send(null);
	
	var database = JSON.parse(content);

	var userinput = "<?php echo"$keyword"?>";
	var range = "<?php echo"$range"?>";
	var category = "<?php echo"$category"?>";
	var filter = "<?php echo"$filter"?>";
	var lprice = "<?php echo"$lprice"?>";
	var hprice = "<?php echo"$hprice"?>";
	var brand = "<?php echo"$brand"?>";
	var current;
	var current2 = "";
	var result = 0;
	document.getElementById("searchbar").value = userinput;
	userinput = userinput.toLowerCase();
	var length = userinput.length;
	var isPC = true;
	var i3 = 0;
	var brandArray = new Array();
	var start = 0;
	var priceset = false;
	
	if (screen.width < 768) {
		isPC = false;
		document.getElementById("resultfilter").style.display = "none";
	}
	
	if (!isNaN(lprice) && !isNaN(hprice) && lprice != "" && hprice != "") {
		lprice = parseFloat(lprice);
		hprice = parseFloat(hprice);
		if (lprice > hprice) {
			var temp = lprice;
			lprice = hprice;
			hprice = temp;
		}
		priceset = true;
	}
	
	for (pos = 0; pos < brand.length; pos++) {
		if (brand.substring(pos, pos + 1) == ";") {
			brandArray.push(brand.substring(start, pos));
			start = pos + 1;
		}
	}
	
	if (range == "low" || range == "mid" || range == "high") {
		for (let i in database) {
			var match = false;
			var pricematch = false;
			var brandmatch = false;
			var filtermatch = false;
			var pricerange;
			for (let i2 in database[i].Tag) {
				match = match || database[i].Tag[i2].includes(range);
				if (priceset) {
					for (i3 = 0; i3 < Object.keys(database[i].Price).length; i3++) {
						if (parseFloat(database[i].Price[i3]) >= lprice && parseFloat(database[i].Price[i3]) <= hprice) {
							pricematch = true;
						}
					}
				} else {
					pricematch = true;
				}
				
				if (brand) {
					for (i3 = 0; i3 < brandArray.length; i3++) {
						if (database[i].Name.includes(brandArray[i3])) {
							brandmatch = true;
						}
					}
				} else {
					brandmatch = true;
				}
				
				if (filter) {
					if (filter == "OS1") {
						if (database[i].OS[0].includes("Windows")) {filtermatch = true;}
					} else if (filter == "OS2") {
						if (database[i].OS[0].includes("macOS")) {filtermatch = true;}
					} else if (filter == "CPU1") {
						for (i3 = 0; i3 < Object.keys(database[i].CPU).length; i3++) {if (database[i].CPU[i3].includes("Intel® Core™ i3")) {filtermatch = true;}}
					} else if (filter == "CPU2") {
						for (i3 = 0; i3 < Object.keys(database[i].CPU).length; i3++) {if (database[i].CPU[i3].includes("Intel® Core™ i5")) {filtermatch = true;}}
					} else if (filter == "CPU3") {
						for (i3 = 0; i3 < Object.keys(database[i].CPU).length; i3++) {if (database[i].CPU[i3].includes("Intel® Core™ i7")) {filtermatch = true;}}
					} else if (filter == "CPU4") {
						for (i3 = 0; i3 < Object.keys(database[i].CPU).length; i3++) {if (database[i].CPU[i3].includes("Intel® Core™ i9")) {filtermatch = true;}}
					} else if (filter == "CPU5") {
						for (i3 = 0; i3 < Object.keys(database[i].CPU).length; i3++) {if (database[i].CPU[i3].includes("AMD Ryzen™ 3")) {filtermatch = true;}}
					} else if (filter == "CPU6") {
						for (i3 = 0; i3 < Object.keys(database[i].CPU).length; i3++) {if (database[i].CPU[i3].includes("AMD Ryzen™ 5")) {filtermatch = true;}}
					} else if (filter == "CPU7") {
						for (i3 = 0; i3 < Object.keys(database[i].CPU).length; i3++) {if (database[i].CPU[i3].includes("AMD Ryzen™ 7")) {filtermatch = true;}}
					} else if (filter == "CPU8") {
						for (i3 = 0; i3 < Object.keys(database[i].CPU).length; i3++) {if (database[i].CPU[i3].includes("AMD Ryzen™ 9")) {filtermatch = true;}}
					} else if (filter == "GPU1") {
						for (i3 = 0; i3 < Object.keys(database[i].GPU).length; i3++) {if (database[i].GPU[i3].includes("NVIDIA® GeForce® RTX")) {filtermatch = true;}}
					} else if (filter == "RAM1") {
						for (i3 = 0; i3 < Object.keys(database[i].RAM).length; i3++) {if (database[i].RAM[i3].includes("4GB")) {filtermatch = true;}}
					} else if (filter == "RAM2") {
						for (i3 = 0; i3 < Object.keys(database[i].RAM).length; i3++) {if (database[i].RAM[i3].includes("8GB")) {filtermatch = true;}}
					} else if (filter == "RAM3") {
						for (i3 = 0; i3 < Object.keys(database[i].RAM).length; i3++) {if (database[i].RAM[i3].includes("16GB")) {filtermatch = true;}}
					} else if (filter == "RAM4") {
						for (i3 = 0; i3 < Object.keys(database[i].RAM).length; i3++) {if (database[i].RAM[i3].includes("32GB")) {filtermatch = true;}}
					} else if (filter == "Storage1") {
						for (i3 = 0; i3 < Object.keys(database[i].Storage).length; i3++) {if (database[i].Storage[i3].includes("128GB") || database[i].Storage[i3].includes("256GB")) {filtermatch = true;}}
					} else if (filter == "Storage2") {
						for (i3 = 0; i3 < Object.keys(database[i].Storage).length; i3++) {if (database[i].Storage[i3].includes("512GB")) {filtermatch = true;}}
					} else if (filter == "Storage3") {
						for (i3 = 0; i3 < Object.keys(database[i].Storage).length; i3++) {if (database[i].Storage[i3].includes("1TB") || database[i].Storage[i3].includes("2TB")) {filtermatch = true;}}
					} else if (filter == "Screen1") {
						for (i3 = 0; i3 < Object.keys(database[i].Resolution).length; i3++) {if (database[i].Resolution[i3].includes("1080P")) {filtermatch = true;}}
					} else if (filter == "Screen2") {
						for (i3 = 0; i3 < Object.keys(database[i].Resolution).length; i3++) {if (database[i].Resolution[i3].includes("2K")) {filtermatch = true;}}
					} else if (filter == "Screen3") {
						for (i3 = 0; i3 < Object.keys(database[i].Resolution).length; i3++) {if (database[i].Resolution[i3].includes("4K")) {filtermatch = true;}}
					} else if (filter == "Battery1") {
						if (parseFloat(database[i].Battery) <= 50) {filtermatch = true;}
					} else if (filter == "Battery2") {
						if (parseFloat(database[i].Battery) >= 51 && parseFloat(database[i].Battery) <= 70) {filtermatch = true;}
					} else if (filter == "Battery3") {
						if (parseFloat(database[i].Battery) > 70) {filtermatch = true;}
					} else if (filter == "Weight1") {
						if (parseFloat(database[i].Weight) < 1) {filtermatch = true;}
					} else if (filter == "Weight2") {
						if (parseFloat(database[i].Weight) >= 1 && parseFloat(database[i].Weight) <= 1.5) {filtermatch = true;}
					} else if (filter == "Weight3") {
						if (parseFloat(database[i].Weight) > 1.5 && parseFloat(database[i].Weight) <= 2) {filtermatch = true;}
					} else if (filter == "Weight4") {
						if (parseFloat(database[i].Weight) > 2) {filtermatch = true;}
					}
				} else {
					filtermatch = true;
				}
			}
			if (match && pricematch && brandmatch && filtermatch) {
				result += 1;
				for (i3 = 0; i3 < Object.keys(database[i].Price).length; i3++) {
					if (database[i].Price[i3] != "N/A") {
						for (i4 = Object.keys(database[i].Price).length - 1; i4 >= 0; i4--) {
							if (database[i].Price[i4] != "N/A") {
								if (database[i].Price[i3] == database[i].Price[i4]){
									pricerange = database[i].Price[i3];
								} else {
									pricerange = database[i].Price[i3] + " - " + database[i].Price[i4];
								}
								break;
							}
						}
						break;
					}
				}
				if (isPC) {
					document.getElementById('resultmain').innerHTML += '<article><a href="./products/detail.php?id=' + database[i].ID + '"><img class="resultimg" src="./products/img/preview/' + i + '.png" width="100%"></a><div><a href="./products/detail.php?id=' + database[i].ID + '"><h3>' + 
					i + '</h3></a><a href="./products/detail.php?id=' + database[i].ID + '"><p class="price"><small>HKD$</small><b>' + pricerange + '</b></p></a><small><b>CPU: </b> ' + database[i].CPU[i3] + '</small><br><small><b>GPU: </b> ' + database[i].GPU[i3] + '</small></div></article>';
				} else {
					document.getElementById('resultmain').innerHTML += '<a href="./products/detail.php?id=' + database[i].ID + '"><article><img class="resultimg" src="./products/img/preview/' + i + '.png" width="100%"><div><h3>' + 
					i + '</h3><p class="price"><small>HKD$</small><b>' + pricerange + '</b></p><small><b>CPU: </b> ' + database[i].CPU[i3] + '</small><br><small><b>GPU: </b> ' + database[i].GPU[i3] + '</small></div></article></a>';
				}
			}
		}
	} else if (category == "best-value" || category == "portability" || category == "gaming" || category == "content-creation" || category == "business") {
		for (let i in database) {
			var match = false;
			var pricematch = false;
			var brandmatch = false;
			var filtermatch = false;
			var pricerange;
			for (let i2 in database[i].Tag) {
				match = match || database[i].Tag[i2].includes(category);
				if (priceset) {
					for (i3 = 0; i3 < Object.keys(database[i].Price).length; i3++) {
						if (parseFloat(database[i].Price[i3]) >= lprice && parseFloat(database[i].Price[i3]) <= hprice) {
							pricematch = true;
						}
					}
				} else {
					pricematch = true;
				}
				
				if (brand) {
					for (i3 = 0; i3 < brandArray.length; i3++) {
						if (database[i].Name.includes(brandArray[i3])) {
							brandmatch = true;
						}
					}
				} else {
					brandmatch = true;
				}
				
				if (filter) {
					if (filter == "OS1") {
						if (database[i].OS[0].includes("Windows")) {filtermatch = true;}
					} else if (filter == "OS2") {
						if (database[i].OS[0].includes("macOS")) {filtermatch = true;}
					} else if (filter == "CPU1") {
						for (i3 = 0; i3 < Object.keys(database[i].CPU).length; i3++) {if (database[i].CPU[i3].includes("Intel® Core™ i3")) {filtermatch = true;}}
					} else if (filter == "CPU2") {
						for (i3 = 0; i3 < Object.keys(database[i].CPU).length; i3++) {if (database[i].CPU[i3].includes("Intel® Core™ i5")) {filtermatch = true;}}
					} else if (filter == "CPU3") {
						for (i3 = 0; i3 < Object.keys(database[i].CPU).length; i3++) {if (database[i].CPU[i3].includes("Intel® Core™ i7")) {filtermatch = true;}}
					} else if (filter == "CPU4") {
						for (i3 = 0; i3 < Object.keys(database[i].CPU).length; i3++) {if (database[i].CPU[i3].includes("Intel® Core™ i9")) {filtermatch = true;}}
					} else if (filter == "CPU5") {
						for (i3 = 0; i3 < Object.keys(database[i].CPU).length; i3++) {if (database[i].CPU[i3].includes("AMD Ryzen™ 3")) {filtermatch = true;}}
					} else if (filter == "CPU6") {
						for (i3 = 0; i3 < Object.keys(database[i].CPU).length; i3++) {if (database[i].CPU[i3].includes("AMD Ryzen™ 5")) {filtermatch = true;}}
					} else if (filter == "CPU7") {
						for (i3 = 0; i3 < Object.keys(database[i].CPU).length; i3++) {if (database[i].CPU[i3].includes("AMD Ryzen™ 7")) {filtermatch = true;}}
					} else if (filter == "CPU8") {
						for (i3 = 0; i3 < Object.keys(database[i].CPU).length; i3++) {if (database[i].CPU[i3].includes("AMD Ryzen™ 9")) {filtermatch = true;}}
					} else if (filter == "GPU1") {
						for (i3 = 0; i3 < Object.keys(database[i].GPU).length; i3++) {if (database[i].GPU[i3].includes("NVIDIA® GeForce® RTX")) {filtermatch = true;}}
					} else if (filter == "RAM1") {
						for (i3 = 0; i3 < Object.keys(database[i].RAM).length; i3++) {if (database[i].RAM[i3].includes("4GB")) {filtermatch = true;}}
					} else if (filter == "RAM2") {
						for (i3 = 0; i3 < Object.keys(database[i].RAM).length; i3++) {if (database[i].RAM[i3].includes("8GB")) {filtermatch = true;}}
					} else if (filter == "RAM3") {
						for (i3 = 0; i3 < Object.keys(database[i].RAM).length; i3++) {if (database[i].RAM[i3].includes("16GB")) {filtermatch = true;}}
					} else if (filter == "RAM4") {
						for (i3 = 0; i3 < Object.keys(database[i].RAM).length; i3++) {if (database[i].RAM[i3].includes("32GB")) {filtermatch = true;}}
					} else if (filter == "Storage1") {
						for (i3 = 0; i3 < Object.keys(database[i].Storage).length; i3++) {if (database[i].Storage[i3].includes("128GB") || database[i].Storage[i3].includes("256GB")) {filtermatch = true;}}
					} else if (filter == "Storage2") {
						for (i3 = 0; i3 < Object.keys(database[i].Storage).length; i3++) {if (database[i].Storage[i3].includes("512GB")) {filtermatch = true;}}
					} else if (filter == "Storage3") {
						for (i3 = 0; i3 < Object.keys(database[i].Storage).length; i3++) {if (database[i].Storage[i3].includes("1TB") || database[i].Storage[i3].includes("2TB")) {filtermatch = true;}}
					} else if (filter == "Screen1") {
						for (i3 = 0; i3 < Object.keys(database[i].Resolution).length; i3++) {if (database[i].Resolution[i3].includes("1080P")) {filtermatch = true;}}
					} else if (filter == "Screen2") {
						for (i3 = 0; i3 < Object.keys(database[i].Resolution).length; i3++) {if (database[i].Resolution[i3].includes("2K")) {filtermatch = true;}}
					} else if (filter == "Screen3") {
						for (i3 = 0; i3 < Object.keys(database[i].Resolution).length; i3++) {if (database[i].Resolution[i3].includes("4K")) {filtermatch = true;}}
					} else if (filter == "Battery1") {
						if (parseFloat(database[i].Battery) <= 50) {filtermatch = true;}
					} else if (filter == "Battery2") {
						if (parseFloat(database[i].Battery) >= 51 && parseFloat(database[i].Battery) <= 70) {filtermatch = true;}
					} else if (filter == "Battery3") {
						if (parseFloat(database[i].Battery) > 70) {filtermatch = true;}
					} else if (filter == "Weight1") {
						if (parseFloat(database[i].Weight) < 1) {filtermatch = true;}
					} else if (filter == "Weight2") {
						if (parseFloat(database[i].Weight) >= 1 && parseFloat(database[i].Weight) <= 1.5) {filtermatch = true;}
					} else if (filter == "Weight3") {
						if (parseFloat(database[i].Weight) > 1.5 && parseFloat(database[i].Weight) <= 2) {filtermatch = true;}
					} else if (filter == "Weight4") {
						if (parseFloat(database[i].Weight) > 2) {filtermatch = true;}
					}
				} else {
					filtermatch = true;
				}
			}
			if (match && pricematch && brandmatch && filtermatch) {
				result += 1;
				for (i3 = 0; i3 < Object.keys(database[i].Price).length; i3++) {
					if (database[i].Price[i3] != "N/A") {
						for (i4 = Object.keys(database[i].Price).length - 1; i4 >= 0; i4--) {
							if (database[i].Price[i4] != "N/A") {
								if (database[i].Price[i3] == database[i].Price[i4]){
									pricerange = database[i].Price[i3];
								} else {
									pricerange = database[i].Price[i3] + " - " + database[i].Price[i4];
								}
								break;
							}
						}
						break;
					}
				}
				if (isPC) {
					document.getElementById('resultmain').innerHTML += '<article><a href="./products/detail.php?id=' + database[i].ID + '"><img class="resultimg" src="./products/img/preview/' + i + '.png" width="100%"></a><div><a href="./products/detail.php?id=' + database[i].ID + '"><h3>' + 
					i + '</h3></a><a href="./products/detail.php?id=' + database[i].ID + '"><p class="price"><small>HKD$</small><b>' + pricerange + '</b></p></a><small><b>CPU: </b> ' + database[i].CPU[i3] + '</small><br><small><b>GPU: </b> ' + database[i].GPU[i3] + '</small></div></article>';
				} else {
					document.getElementById('resultmain').innerHTML += '<a href="./products/detail.php?id=' + database[i].ID + '"><article><img class="resultimg" src="./products/img/preview/' + i + '.png" width="100%"><div><h3>' + 
					i + '</h3><p class="price"><small>HKD$</small><b>' + pricerange + '</b></p><small><b>CPU: </b> ' + database[i].CPU[i3] + '</small><br><small><b>GPU: </b> ' + database[i].GPU[i3] + '</small></div></article></a>';
				}
			}
		}
	} else {
		for (let i in database) {
			var end = length;
			var match = false;
			var pricematch = false;
			var brandmatch = false;
			var filtermatch = false;
			var pricerange;
			if (range) {
				userinput = range;
			} else if (category) {
				userinput = category;
			}
			for (start = 0; end <= database[i].Name.length; start++) {
				end = start + userinput.length;
				match = match || database[i].Name.substring(start,end).toLowerCase().includes(userinput);
				if (priceset) {
					for (i3 = 0; i3 < Object.keys(database[i].Price).length; i3++) {
						if (parseFloat(database[i].Price[i3]) >= lprice && parseFloat(database[i].Price[i3]) <= hprice) {
							pricematch = true;
						}
					}
				} else {
					pricematch = true;
				}
				
				if (brand) {
					for (i3 = 0; i3 < brandArray.length; i3++) {
						if (database[i].Name.includes(brandArray[i3])) {
							brandmatch = true;
						}
					}
				} else {
					brandmatch = true;
				}
				
				if (filter) {
					if (filter == "OS1") {
						if (database[i].OS[0].includes("Windows")) {filtermatch = true;}
					} else if (filter == "OS2") {
						if (database[i].OS[0].includes("macOS")) {filtermatch = true;}
					} else if (filter == "CPU1") {
						for (i3 = 0; i3 < Object.keys(database[i].CPU).length; i3++) {if (database[i].CPU[i3].includes("Intel® Core™ i3")) {filtermatch = true;}}
					} else if (filter == "CPU2") {
						for (i3 = 0; i3 < Object.keys(database[i].CPU).length; i3++) {if (database[i].CPU[i3].includes("Intel® Core™ i5")) {filtermatch = true;}}
					} else if (filter == "CPU3") {
						for (i3 = 0; i3 < Object.keys(database[i].CPU).length; i3++) {if (database[i].CPU[i3].includes("Intel® Core™ i7")) {filtermatch = true;}}
					} else if (filter == "CPU4") {
						for (i3 = 0; i3 < Object.keys(database[i].CPU).length; i3++) {if (database[i].CPU[i3].includes("Intel® Core™ i9")) {filtermatch = true;}}
					} else if (filter == "CPU5") {
						for (i3 = 0; i3 < Object.keys(database[i].CPU).length; i3++) {if (database[i].CPU[i3].includes("AMD Ryzen™ 3")) {filtermatch = true;}}
					} else if (filter == "CPU6") {
						for (i3 = 0; i3 < Object.keys(database[i].CPU).length; i3++) {if (database[i].CPU[i3].includes("AMD Ryzen™ 5")) {filtermatch = true;}}
					} else if (filter == "CPU7") {
						for (i3 = 0; i3 < Object.keys(database[i].CPU).length; i3++) {if (database[i].CPU[i3].includes("AMD Ryzen™ 7")) {filtermatch = true;}}
					} else if (filter == "CPU8") {
						for (i3 = 0; i3 < Object.keys(database[i].CPU).length; i3++) {if (database[i].CPU[i3].includes("AMD Ryzen™ 9")) {filtermatch = true;}}
					} else if (filter == "GPU1") {
						for (i3 = 0; i3 < Object.keys(database[i].GPU).length; i3++) {if (database[i].GPU[i3].includes("NVIDIA® GeForce® RTX")) {filtermatch = true;}}
					} else if (filter == "RAM1") {
						for (i3 = 0; i3 < Object.keys(database[i].RAM).length; i3++) {if (database[i].RAM[i3].includes("4GB")) {filtermatch = true;}}
					} else if (filter == "RAM2") {
						for (i3 = 0; i3 < Object.keys(database[i].RAM).length; i3++) {if (database[i].RAM[i3].includes("8GB")) {filtermatch = true;}}
					} else if (filter == "RAM3") {
						for (i3 = 0; i3 < Object.keys(database[i].RAM).length; i3++) {if (database[i].RAM[i3].includes("16GB")) {filtermatch = true;}}
					} else if (filter == "RAM4") {
						for (i3 = 0; i3 < Object.keys(database[i].RAM).length; i3++) {if (database[i].RAM[i3].includes("32GB")) {filtermatch = true;}}
					} else if (filter == "Storage1") {
						for (i3 = 0; i3 < Object.keys(database[i].Storage).length; i3++) {if (database[i].Storage[i3].includes("128GB") || database[i].Storage[i3].includes("256GB")) {filtermatch = true;}}
					} else if (filter == "Storage2") {
						for (i3 = 0; i3 < Object.keys(database[i].Storage).length; i3++) {if (database[i].Storage[i3].includes("512GB")) {filtermatch = true;}}
					} else if (filter == "Storage3") {
						for (i3 = 0; i3 < Object.keys(database[i].Storage).length; i3++) {if (database[i].Storage[i3].includes("1TB") || database[i].Storage[i3].includes("2TB")) {filtermatch = true;}}
					} else if (filter == "Screen1") {
						for (i3 = 0; i3 < Object.keys(database[i].Resolution).length; i3++) {if (database[i].Resolution[i3].includes("1080P")) {filtermatch = true;}}
					} else if (filter == "Screen2") {
						for (i3 = 0; i3 < Object.keys(database[i].Resolution).length; i3++) {if (database[i].Resolution[i3].includes("2K")) {filtermatch = true;}}
					} else if (filter == "Screen3") {
						for (i3 = 0; i3 < Object.keys(database[i].Resolution).length; i3++) {if (database[i].Resolution[i3].includes("4K")) {filtermatch = true;}}
					} else if (filter == "Battery1") {
						if (parseFloat(database[i].Battery) <= 50) {filtermatch = true;}
					} else if (filter == "Battery2") {
						if (parseFloat(database[i].Battery) >= 51 && parseFloat(database[i].Battery) <= 70) {filtermatch = true;}
					} else if (filter == "Battery3") {
						if (parseFloat(database[i].Battery) > 70) {filtermatch = true;}
					} else if (filter == "Weight1") {
						if (parseFloat(database[i].Weight) < 1) {filtermatch = true;}
					} else if (filter == "Weight2") {
						if (parseFloat(database[i].Weight) >= 1 && parseFloat(database[i].Weight) <= 1.5) {filtermatch = true;}
					} else if (filter == "Weight3") {
						if (parseFloat(database[i].Weight) > 1.5 && parseFloat(database[i].Weight) <= 2) {filtermatch = true;}
					} else if (filter == "Weight4") {
						if (parseFloat(database[i].Weight) > 2) {filtermatch = true;}
					}
				} else {
					filtermatch = true;
				}
			}
			if (match && pricematch && brandmatch && filtermatch) {
				result += 1;
				for (i3 = 0; i3 < Object.keys(database[i].Price).length; i3++) {
					if (database[i].Price[i3] != "N/A") {
						for (i4 = Object.keys(database[i].Price).length - 1; i4 >= 0; i4--) {
							if (database[i].Price[i4] != "N/A") {
								if (database[i].Price[i3] == database[i].Price[i4]){
									pricerange = database[i].Price[i3];
								} else {
									pricerange = database[i].Price[i3] + " - " + database[i].Price[i4];
								}
								break;
							}
						}
						break;
					}
				}
				if (isPC) {
					document.getElementById('resultmain').innerHTML += '<article><a href="./products/detail.php?id=' + database[i].ID + '"><img class="resultimg" src="./products/img/preview/' + i + '.png" width="100%"></a><div><a href="./products/detail.php?id=' + database[i].ID + '"><h3>' + 
					i + '</h3></a><a href="./products/detail.php?id=' + database[i].ID + '"><p class="price"><small>HKD$</small><b>' + pricerange + '</b></p></a><small><b>CPU: </b> ' + database[i].CPU[i3] + '</small><br><small><b>GPU: </b> ' + database[i].GPU[i3] + '</small></div></article>';
				} else {
					document.getElementById('resultmain').innerHTML += '<a href="./products/detail.php?id=' + database[i].ID + '"><article><img class="resultimg" src="./products/img/preview/' + i + '.png" width="100%"><div><h3>' + 
					i + '</h3><p class="price"><small>HKD$</small><b>' + pricerange + '</b></p><small><b>CPU: </b> ' + database[i].CPU[i3] + '</small><br><small><b>GPU: </b> ' + database[i].GPU[i3] + '</small></div></article></a>';
				}
			}
		}
	}
	
	if (result == 1) {
	document.getElementById("resultcount").innerHTML = '1 result for <q><b>' + document.getElementById("resultcount").innerHTML + '</q></b>';
	} else if (result > 1) {
	document.getElementById("resultcount").innerHTML = result + ' results for <q><b>' + document.getElementById("resultcount").innerHTML + '</q></b>';
	} else {
	document.getElementById("resultcount").innerHTML = '0 result for <q><b>' + document.getElementById("resultcount").innerHTML + '</q></b>';
	document.getElementById('resultmain').innerHTML += '<br>Suggestions based on what you searched:<br><br><small>(Coming soon)</small>';
	//for (i = 1; i <= 5; i++) {
		//suggest 5 products based on tags or name
	//}
	}
	
	if (filter && IDName(filter)) {
		document.getElementById("resultcount").innerHTML += ", filtered by <b>" + IDName(filter) + "</b>";
	}
	
	document.getElementById("pricelow").value = lprice;
	document.getElementById("pricehigh").value = hprice;
	if (brand.includes("ASUS")) {document.getElementById("ASUS").checked = true;}
	if (brand.includes("Apple")) {document.getElementById("Apple").checked = true;}
	if (brand.includes("DELL")) {document.getElementById("DELL").checked = true;}
	if (brand.includes("HP")) {document.getElementById("HP").checked = true;}
	if (brand.includes("Microsoft")) {document.getElementById("Microsoft").checked = true;}
	
	current = "http://student.tanghin.edu.hk/~S150646/search.php?";
	if ("<?php echo"$range"?>") {
		current += "range=" + "<?php echo"$range"?>"
	} else if ("<?php echo"$category"?>") {
		current += "category=" + "<?php echo"$category"?>"
	} else {
		current += "keyword=" + "<?php echo"$keyword"?>"
	}
	
	if (priceset || brand) {
		current2 = "&lprice=" + lprice + "&hprice=" + hprice + "&brand=" + brand;
	}
	
	document.getElementById("OS1").href = current + "&filter=OS1" + current2;
	document.getElementById("OS2").href = current + "&filter=OS2" + current2;
	document.getElementById("OS1").href = current + "&filter=OS1" + current2;
	document.getElementById("CPU1").href = current + "&filter=CPU1" + current2;
	document.getElementById("CPU2").href = current + "&filter=CPU2" + current2;
	document.getElementById("CPU3").href = current + "&filter=CPU3" + current2;
	document.getElementById("CPU4").href = current + "&filter=CPU4" + current2;
	document.getElementById("CPU5").href = current + "&filter=CPU5" + current2;
	document.getElementById("CPU6").href = current + "&filter=CPU6" + current2;
	document.getElementById("CPU7").href = current + "&filter=CPU7" + current2;
	document.getElementById("CPU8").href = current + "&filter=CPU8" + current2;
	document.getElementById("GPU1").href = current + "&filter=GPU1" + current2;
	document.getElementById("RAM1").href = current + "&filter=RAM1" + current2;
	document.getElementById("RAM2").href = current + "&filter=RAM2" + current2;
	document.getElementById("RAM3").href = current + "&filter=RAM3" + current2;
	document.getElementById("RAM4").href = current + "&filter=RAM4" + current2;
	document.getElementById("Storage1").href = current + "&filter=Storage1" + current2;
	document.getElementById("Storage2").href = current + "&filter=Storage2" + current2;
	document.getElementById("Storage3").href = current + "&filter=Storage3" + current2;
	document.getElementById("Screen1").href = current + "&filter=Screen1" + current2;
	document.getElementById("Screen2").href = current + "&filter=Screen2" + current2;
	document.getElementById("Screen3").href = current + "&filter=Screen3" + current2;
	document.getElementById("Battery1").href = current + "&filter=Battery1" + current2;
	document.getElementById("Battery2").href = current + "&filter=Battery2" + current2;
	document.getElementById("Battery3").href = current + "&filter=Battery3" + current2;
	document.getElementById("Weight1").href = current + "&filter=Weight1" + current2;
	document.getElementById("Weight2").href = current + "&filter=Weight2" + current2;
	document.getElementById("Weight3").href = current + "&filter=Weight3" + current2;
	document.getElementById("Weight4").href = current + "&filter=Weight4" + current2;
	
	function FilterDiv() {
		var x = document.getElementById("resultfilter");
		if (x.style.display === "none") {
			x.style.display = "block";
		} else {
			x.style.display = "none";
		}
	}

	function IDName(idcode) {
		if (idcode == "OS1") {
			return "OS: Windows";
		} else if (idcode == "OS2") {
			return "OS: macOS";
		} else if (idcode == "CPU1") {
			return "CPU: Intel Core i3";
		} else if (idcode == "CPU2") {
			return "CPU: Intel Core i5";
		} else if (idcode == "CPU3") {
			return "CPU: Intel Core i7";
		} else if (idcode == "CPU4") {
			return "CPU: Intel Core i9";
		} else if (idcode == "CPU5") {
			return "CPU: AMD Ryzen 3";
		} else if (idcode == "CPU6") {
			return "CPU: AMD Ryzen 5";
		} else if (idcode == "CPU7") {
			return "CPU: AMD Ryzen 7";
		} else if (idcode == "CPU8") {
			return "CPU: AMD Ryzen 9";
		} else if (idcode == "GPU1") {
			return "GPU: NVIDIA GeForce RTX";
		} else if (idcode == "RAM1") {
			return "RAM: 4GB";
		} else if (idcode == "RAM2") {
			return "RAM: 8GB";
		} else if (idcode == "RAM3") {
			return "RAM: 16GB";
		} else if (idcode == "RAM4") {
			return "RAM: 32GB";
		} else if (idcode == "Storage1") {
			return "Storage: 256GB or below";
		} else if (idcode == "Storage2") {
			return "Storage: 512GB";
		} else if (idcode == "Storage3") {
			return "Storage: 1TB or above";
		} else if (idcode == "Screen1") {
			return "Screen: 1080P";
		} else if (idcode == "Screen2") {
			return "Screen: 2K";
		} else if (idcode == "Screen3") {
			return "Screen: 4K";
		} else if (idcode == "Battery1") {
			return "Battery: below 50Wh";
		} else if (idcode == "Battery2") {
			return "Battery: 51 Wh - 70Wh";
		} else if (idcode == "Battery3") {
			return "Battery: 70 Wh above";
		} else if (idcode == "Weight1") {
			return "Weight: below 1 kg";
		} else if (idcode == "Weight2") {
			return "Weight: 1 kg - 1.5 kg";
		} else if (idcode == "Weight3") {
			return "Weight: 1.5 kg - 2 kg";
		} else if (idcode == "Weight4") {
			return "Weight: above 2 kg";
		}
	}

	function AdvanceSearch() {
		var filter = "<?php echo"$filter"?>";
		var pricelow = document.getElementById("pricelow").value;
		var pricehigh = document.getElementById("pricehigh").value;
		var brand = "";
		if (document.getElementById("ASUS").checked) {brand += "ASUS;";}
		if (document.getElementById("Apple").checked) {brand += "Apple;";}
		if (document.getElementById("DELL").checked) {brand += "DELL;";}
		if (document.getElementById("HP").checked) {brand += "HP;";}
		if (document.getElementById("Microsoft").checked) {brand += "Microsoft;";}
		if (filter) {
			window.location.href = current + "&filter=" + filter + "&lprice=" + pricelow + "&hprice=" + pricehigh + "&brand=" + brand;
		} else {
			window.location.href = current + "&lprice=" + pricelow + "&hprice=" + pricehigh + "&brand=" + brand;
		}
	}
	</script>

</div>

</body>

<footer>
<div class="footerlinkgroup">
<a class="footerlink" href="./sitemap.html">Sitemap</a><a class="footerlink" href="./about.html">About us</a><a class="footerlink" href="./login.php">Account</a>
</div>
<small>&copy; Copyright 2020 Laptop, Inc. All rights reserved.<small>
</footer>
</html>