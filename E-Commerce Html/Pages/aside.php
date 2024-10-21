<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aside</title>
    <link rel="stylesheet" href="Styles/Utility.css">
</head>
<body>
<aside class="w-100 p-4 bg-white rounded shadow">
            <h2 class="font-semibold mb-4">Filter By</h2>
            <div class="mb-4">
                <h3 class="font-semibold mb-2">Availability</h3>
                <ul>
                    <li>
                        <input id="available" type="checkbox" data-filter-type="availability" data-filter-value="Available"/>
                        <label class="ml-2" for="available">Available (17)</label>
                    </li>
                    <li>
                        <input id="in-stock" type="checkbox" data-filter-type="availability" data-filter-value="In Stock"/>
                        <label class="ml-2" for="in-stock">In Stock (17)</label>
                    </li>
                    <li>
                        <input id="not-available" type="checkbox" data-filter-type="availability" data-filter-value="Not Available"/>
                        <label class="ml-2" for="not-available">Not Available (1)</label>
                    </li>
                </ul>
            </div>
            <div class="mb-4">
                <h3 class="font-semibold mb-2">Size</h3>
                <ul>
                    <li>
                        <input id="small" type="checkbox" data-filter-type="size" data-filter-value="Small"/>
                        <label class="ml-2" for="small">Small (6)</label>
                    </li>
                    <li>
                        <input id="medium" type="checkbox" data-filter-type="size" data-filter-value="Medium"/>
                        <label class="ml-2" for="medium">Medium (5)</label>
                    </li>
                    <li>
                        <input id="large" type="checkbox" data-filter-type="size" data-filter-value="Large"/>
                        <label class="ml-2" for="large">Large (7)</label>
                    </li>
                    <li>
                        <input id="xl" type="checkbox" data-filter-type="size" data-filter-value="XL"/>
                        <label class="ml-2" for="xl">XL (1)</label>
                    </li>
                    <li>
                        <input id="xxl" type="checkbox" data-filter-type="size" data-filter-value="XXL"/>
                        <label class="ml-2" for="xxl">XXL (3)</label>
                    </li>
                </ul>
            </div>
            <div class="mb-4">
                <h3 class="font-semibold mb-2">Color</h3>
                <ul>
                    <li>
                        <input id="grey" type="checkbox" data-filter-type="color" data-filter-value="Grey"/>
                        <label class="ml-2" for="grey"><span class="inline-block w-3 h-3 bg-gray-500 rounded-full mr-2"></span>Grey (4)</label>
                    </li>
                    <li>
                        <input id="red" type="checkbox" data-filter-type="color" data-filter-value="Red"/>
                        <label class="ml-2" for="red"><span class="inline-block w-3 h-3 bg-red-500 rounded-full mr-2"></span>Red (3)</label>
                    </li>
                    <li>
                        <input id="black" type="checkbox" data-filter-type="color" data-filter-value="Black"/>
                        <label class="ml-2" for="black"><span class="inline-block w-3 h-3 bg-black rounded-full mr-2"></span>Black (3)</label>
                    </li>
                    <li>
                        <input id="orange" type="checkbox" data-filter-type="color" data-filter-value="Orange"/>
                        <label class="ml-2" for="orange"><span class="inline-block w-3 h-3 bg-orange-500 rounded-full mr-2"></span>Orange (2)</label>
                    </li>
                    <li>
                        <input id="blue" type="checkbox" data-filter-type="color" data-filter-value="Blue"/>
                        <label class="ml-2" for="blue"><span class="inline-block w-3 h-3 bg-blue-500 rounded-full mr-2"></span>Blue (5)</label>
                    </li>
                    <li>
                        <input id="green" type="checkbox" data-filter-type="color" data-filter-value="Green"/>
                        <label class="ml-2" for="green"><span class="inline-block w-3 h-3 bg-green-500 rounded-full mr-2"></span>Green (6)</label>
                    </li>
                    <li>
                        <input id="yellow" type="checkbox" data-filter-type="color" data-filter-value="Yellow"/>
                        <label class="ml-2" for="yellow"><span class="inline-block w-3 h-3 bg-yellow-500 rounded-full mr-2"></span>Yellow (3)</label>
                    </li>
                    <li>
                        <input id="pink" type="checkbox" data-filter-type="color" data-filter-value="Pink"/>
                        <label class="ml-2" for="pink"><span class="inline-block w-3 h-3 bg-pink-500 rounded-full mr-2"></span>Pink (2)</label>
                    </li>
                </ul>
            </div>
            <div class="mb-4">
                <h3 class="font-semibold mb-2">Price</h3>
                <input class="w-full" type="range" min="37" max="94"/>
                <div class="flex justify-between text-sm">
                    <span>$37.00</span>
                    <span>$94.00</span>
                </div>
            </div>
            <div class="mb-4">
                <h3 class="font-semibold mb-2">Brand</h3>
                <!-- Add brand filters here if needed -->
            </div>
        </aside>
</body>
</html>