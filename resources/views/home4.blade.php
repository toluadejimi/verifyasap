<!DOCTYPE html>
<html>
<head>
    <title>Item Search Dropdown</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .search-container {
            position: relative;
            display: inline-block;
        }
        .search-box {
            width: 300px;
            padding: 10px;
            font-size: 16px;
            box-sizing: border-box;
        }
        .dropdown {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
            z-index: 1;
            width: 100%;
            box-sizing: border-box;
        }
        .dropdown .item {
            padding: 10px;
            cursor: pointer;
            border-bottom: 1px solid #ddd;
        }
        .dropdown .item:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
<div class="search-container">
    <input type="text" id="search" class="search-box" placeholder="Enter item name..." onkeyup="filterItems()" onclick="toggleDropdown()">
    <div id="dropdown" class="dropdown">
        <div class="item" onclick="selectItem(this)">Apple</div>
        <div class="item" onclick="selectItem(this)">Banana</div>
        <div class="item" onclick="selectItem(this)">Cherry</div>
        <div class="item" onclick="selectItem(this)">Date</div>
        <div class="item" onclick="selectItem(this)">Elderberry</div>
        <div class="item" onclick="selectItem(this)">Fig</div>
        <div class="item" onclick="selectItem(this)">Grape</div>
    </div>
</div>

<script>
    function toggleDropdown() {
        document.getElementById('dropdown').style.display = 'block';
    }

    function filterItems() {
        const searchInput = document.getElementById('search').value.toLowerCase();
        const items = document.querySelectorAll('.dropdown .item');

        items.forEach(item => {
            const text = item.textContent.toLowerCase();
            if (text.includes(searchInput)) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    }

    function selectItem(element) {
        document.getElementById('search').value = element.textContent;
        document.getElementById('dropdown').style.display = 'none';
    }

    document.addEventListener('click', function(event) {
        const searchContainer = document.querySelector('.search-container');
        if (!searchContainer.contains(event.target)) {
            document.getElementById('dropdown').style.display = 'none';
        }
    });
</script>
</body>
</html>


