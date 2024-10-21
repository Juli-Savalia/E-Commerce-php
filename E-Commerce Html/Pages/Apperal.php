<html>
<head>
    <title>Apparel</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="../Styles/Utility.css" />
  <link rel="stylesheet" href="../Styles/bootstrap.min.css" />
  <link rel="stylesheet" href="../Styles/FadeSlider.css" />
  <link rel="stylesheet" href="../Styles/output.css" />
  <link rel="stylesheet" href="../Styles/Home.css">
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const products = [
                {
                    id: 1,
                    name: 'Apple AirPods Max Over-Ear Wireless Headphone',
                    brand: 'Gadget Zone',
                    price: 42.00,
                    originalPrice: 47.00,
                    discount: 5,
                    rating: 5,
                    availability: 'Available',
                    size: 'Large',
                    color: 'Red',
                    image: 'https://storage.googleapis.com/a1aa/image/fB9T1Lwt9OTwDSKdeTtMgB34DMi3Cqrv7HDSeDtct3nKojKnA.jpg'
                },
                {
                    id: 2,
                    name: 'Apple Smart Watch / Midnight Aluminum',
                    brand: 'Initech space',
                    price: 51.04,
                    originalPrice: 58.00,
                    discount: 12,
                    rating: 5,
                    availability: 'Available',
                    size: 'Medium',
                    color: 'Brown',
                    image: 'https://storage.googleapis.com/a1aa/image/iJkfvjOPfquFaEPnzlqtfYEWjEFKAOG1nphzJjp9Li7QojKnA.jpg'
                },
                {
                    id: 3,
                    name: 'Eames Fiberglass Plastic Arm Chairs',
                    brand: 'Looney Tunes',
                    price: 76.00,
                    originalPrice: 76.00,
                    discount: 0,
                    rating: 5,
                    availability: 'Available',
                    size: 'Large',
                    color: 'Blue',
                    image: 'https://storage.googleapis.com/a1aa/image/WU9rainVWCLMJdvrGoCgs4qw9XB3jg9rcuFT9Jp1te7F6oyJA.jpg'
                },
                {
                    id: 4,
                    name: 'BoAt Lite Smartwatch 1.69 Inches HD Display',
                    brand: 'Massive Dynamic',
                    price: 64.17,
                    originalPrice: 69.00,
                    discount: 7,
                    rating: 5,
                    availability: 'Available',
                    size: 'Small',
                    color: 'Green',
                    image: 'https://storage.googleapis.com/a1aa/image/zkLGBATCNEqlC9r9xxHqBxrsyMqWbpswIcmwJeKjycMG6oyJA.jpg'
                },
                {
                    id: 5,
                    name: 'Cropped Satin Bomber Jacket',
                    brand: 'Pro Tech Gear',
                    price: 94.00,
                    originalPrice: 94.00,
                    discount: 0,
                    rating: 5,
                    availability: 'Available',
                    size: 'XL',
                    color: 'Green',
                    image: 'https://storage.googleapis.com/a1aa/image/IyibFn6Ee9Sf3US8LDT3UXfPlMhesAVQ1nZ3l0xAdtraQHVOB.jpg'
                }
            ];

            const productContainer = document.getElementById('product-container');
            const sortBySelect = document.getElementById('sort-by');
            const gridViewBtn = document.getElementById('grid-view-btn');
            const listViewBtn = document.getElementById('list-view-btn');
            const filters = {
                availability: [],
                size: [],
                color: []
            };
            let currentView = 'grid';

            function renderProducts(products) {
                productContainer.innerHTML = '';
                products.forEach(product => {
                    const productElement = document.createElement('div');
                    productElement.className = currentView === 'grid' ? 'border rounded p-4 bg-white' : 'border rounded p-4 bg-white flex w-full';
                    productElement.innerHTML = `
                        <div class="relative ${currentView === 'list' ? 'w-1/4' : ''}">
                            ${product.discount ? `<span class="absolute top-0 left-0 bg-red-500 text-white text-xs px-2 py-1">-${product.discount}%</span>` : ''}
                            <img src="${product.image}" alt="${product.name}" class="w-full h-40 object-cover">
                        </div>
                        <div class="mt-2 ${currentView === 'list' ? 'w-3/4 pl-4' : ''}">
                            <p class="text-gray-600 text-sm">${product.brand}</p>
                            <h3 class="font-semibold">${product.name}</h3>
                            <div class="flex items-center mt-2">
                                ${[...Array(product.rating)].map(() => '<span class="text-yellow-500"><i class="fas fa-star"></i></span>').join('')}
                            </div>
                            <div class="flex items-center mt-2">
                                ${product.discount ? `<span class="line-through text-gray-500 mr-2">$${product.originalPrice.toFixed(2)}</span>` : ''}
                                <span class="text-red-500">$${product.price.toFixed(2)}</span>
                            </div>
                        </div>
                    `;
                    productContainer.appendChild(productElement);
                });
            }

            function applyFilters() {
                let filteredProducts = products;

                if (filters.availability.length) {
                    filteredProducts = filteredProducts.filter(product => filters.availability.includes(product.availability));
                }

                if (filters.size.length) {
                    filteredProducts = filteredProducts.filter(product => filters.size.includes(product.size));
                }

                if (filters.color.length) {
                    filteredProducts = filteredProducts.filter(product => filters.color.includes(product.color));
                }

                renderProducts(filteredProducts);
            }

            function sortProducts(products, criteria) {
                return products.sort((a, b) => {
                    if (criteria === 'price-asc') {
                        return a.price - b.price;
                    } else if (criteria === 'price-desc') {
                        return b.price - a.price;
                    } else if (criteria === 'rating') {
                        return b.rating - a.rating;
                    } else {
                        return 0;
                    }
                });
            }

            sortBySelect.addEventListener('change', function () {
                const sortedProducts = sortProducts(products, this.value);
                renderProducts(sortedProducts);
            });

            document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
                checkbox.addEventListener('change', function () {
                    const filterType = this.getAttribute('data-filter-type');
                    const filterValue = this.getAttribute('data-filter-value');

                    if (this.checked) {
                        filters[filterType].push(filterValue);
                    } else {
                        filters[filterType] = filters[filterType].filter(value => value !== filterValue);
                    }

                    applyFilters();
                });
            });

            gridViewBtn.addEventListener('click', function () {
                currentView = 'grid';
                productContainer.classList.remove('flex-col');
                productContainer.classList.add('grid', 'grid-cols-3', 'gap-4');
                renderProducts(products);
            });

            listViewBtn.addEventListener('click', function () {
                currentView = 'list';
                productContainer.classList.remove('grid', 'grid-cols-3', 'gap-4');
                productContainer.classList.add('flex', 'flex-col');
                renderProducts(products);
            });

            renderProducts(products);
        });
    </script>
</head>
<body class="bg-gray-100">
<div class="container mx-auto p-4">
    <nav class="text-sm text-gray-600 mb-4">
        <a class="hover:underline" href="#">Home</a> &gt;
        <a class="hover:underline" href="#">Fashion</a> &gt;
        <span>Apparel</span>
    </nav>
    <div class="flex">
        <aside class="w-1/4 p-4 bg-white rounded shadow">
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
        <main class="w-3/4 p-4">
            <h1 class="text-2xl font-semibold mb-2">Apparel</h1>
            <p class="text-gray-600 mb-4">We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire that they cannot foresee.</p>
            <div class="mb-4">
                <h2 class="font-semibold mb-2">Subcategories</h2>
                <div class="flex space-x-4">
                    <div class="w-1/4 p-4 border rounded text-center">
                        <img src="https://storage.googleapis.com/a1aa/image/kJ2S8r7rH8YMERCjjsUJDqfdXZxZlq60yQXTwEA6m5kG6oyJA.jpg" alt="No image available" class="w-full h-24 object-cover">
                        <p class="mt-2">Smart Tablet</p>
                    </div>
                    <div class="w-1/4 p-4 border rounded text-center">
                        <img src="https://storage.googleapis.com/a1aa/image/kJ2S8r7rH8YMERCjjsUJDqfdXZxZlq60yQXTwEA6m5kG6oyJA.jpg" alt="No image available" class="w-full h-24 object-cover">
                        <p class="mt-2">Crepe T-Shirt</p>
                    </div>
                    <div class="w-1/4 p-4 border rounded text-center">
                        <img src="https://storage.googleapis.com/a1aa/image/kJ2S8r7rH8YMERCjjsUJDqfdXZxZlq60yQXTwEA6m5kG6oyJA.jpg" alt="No image available" class="w-full h-24 object-cover">
                        <p class="mt-2">leather watch</p>
                    </div>
                    <div class="w-1/4 p-4 border rounded text-center">
                        <img src="https://storage.googleapis.com/a1aa/image/kJ2S8r7rH8YMERCjjsUJDqfdXZxZlq60yQXTwEA6m5kG6oyJA.jpg" alt="No image available" class="w-full h-24 object-cover">
                        <p class="mt-2">Rolling Diamond</p>
                    </div>
                </div>
            </div>
            <div class="flex justify-between items-center mb-4">
                <div class="flex items-center">
                    <button id="grid-view-btn" class="mr-2">
                        <i class="fas fa-th-large text-gray-600"></i>
                    </button>
                    <button id="list-view-btn" class="mr-2">
                        <i class="fas fa-list text-gray-600"></i>
                    </button>
                    <span>There are 18 products.</span>
                </div>
                <div class="flex items-center">
                    <span class="mr-2">Sort By:</span>
                    <select id="sort-by" class="border rounded p-1">
                        <option value="relevance">Relevance</option>
                        <option value="price-asc">Price: Low to High</option>
                        <option value="price-desc">Price: High to Low</option>
                        <option value="rating">Rating</option>
                    </select>
                </div>
            </div>
            <div id="product-container" class="grid grid-cols-3 gap-4">
                <!-- Products will be rendered here by JavaScript -->
            </div>
        </main>
    </div>
</div>
</body>
</html>