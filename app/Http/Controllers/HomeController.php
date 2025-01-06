<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Dummy data produk
        $products = [
            // Laptop ASUS ROG
            [
                'id' => 1,
                'name' => 'Laptop ASUS ROG',
                'price' => 'Rp 15.000.000',
                'category' => 'Laptops',
                'image' => 'laptop.jpg',
                'description_page' => 'product_description.php?id=1',
            ],
            // Laptop Dell XPS
            [
                'id' => 2,
                'name' => 'Laptop Dell XPS',
                'price' => 'Rp 18.000.000',
                'category' => 'Laptops',
                'image' => 'xps.jpg',
                'description_page' => 'product_description.php?id=2',
            ],
            // iPhone 14 Pro
            [
                'id' => 3,
                'name' => 'iPhone 14 Pro',
                'price' => 'Rp 20.000.000',
                'category' => 'Smartphones',
                'image' => 'ipong.jpg',
                'description_page' => 'product_description.php?id=3',
            ],
            // Samsung Galaxy S22
            [
                'id' => 4,
                'name' => 'Samsung Galaxy S22',
                'price' => 'Rp 18.500.000',
                'category' => 'Smartphones',
                'image' => 's22.jpg',
                'description_page' => 'product_description.php?id=4',
            ],
            // Logitech G Pro Headset
            [
                'id' => 5,
                'name' => 'Headset Logitech G Pro',
                'price' => 'Rp 2.000.000',
                'category' => 'Accessories',
                'image' => 'headset.png',
                'description_page' => 'product_description.php?id=5',
            ],
            // USB Flash Drive 64GB
            [
                'id' => 6,
                'name' => 'USB Flash Drive 64GB',
                'price' => 'Rp 150.000',
                'category' => 'Accessories',
                'image' => 'usb.jpg',
                'description_page' => 'product_description.php?id=6',
            ],
            // Mechanical Keyboard RGB
            [
                'id' => 7,
                'name' => 'Mechanical Keyboard RGB',
                'price' => 'Rp 1.200.000',
                'category' => 'Accessories',
                'image' => 'keyboard.jpg',
                'description_page' => 'product_description.php?id=7',
            ],
            // Logitech Mouse G502
            [
                'id' => 8,
                'name' => 'Logitech Mouse G502',
                'price' => 'Rp 500.000',
                'category' => 'Accessories',
                'image' => 'g502.jpg',
                'description_page' => 'product_description.php?id=8',
            ],
            // Asus TUF Gaming Monitor
            [
                'id' => 9,
                'name' => 'Asus TUF Gaming Monitor',
                'price' => 'Rp 4.500.000',
                'category' => 'Monitors',
                'image' => 'monitortuf.png',
                'description_page' => 'product_description.php?id=9',
            ],
            // 27" LG UltraGear Monitor
            [
                'id' => 10,
                'name' => '27" LG UltraGear Monitor',
                'price' => 'Rp 5.000.000',
                'category' => 'Monitors',
                'image' => 'lgutragear.jpg',
                'description_page' => 'product_description.php?id=10',
            ],
            // Sony Wireless Headphones
            [
                'id' => 11,
                'name' => 'Sony Wireless Headphones',
                'price' => 'Rp 3.000.000',
                'category' => 'Accessories',
                'image' => 'sonyheadphone.jpg',
                'description_page' => 'product_description.php?id=11',
            ],
            // External HDD 1TB
            [
                'id' => 12,
                'name' => 'External HDD 1TB',
                'price' => 'Rp 750.000',
                'category' => 'Accessories',
                'image' => 'hdd.jpg',
                'description_page' => 'product_description.php?id=12',
            ],
            // Xiaomi Mi Band 6
            [
                'id' => 13,
                'name' => 'Xiaomi Mi Band 6',
                'price' => 'Rp 500.000',
                'category' => 'Wearables',
                'image' => 'miband6.jpg',
                'description_page' => 'product_description.php?id=13',
            ],
            // Apple Watch Series 7
            [
                'id' => 14,
                'name' => 'Apple Watch Series 7',
                'price' => 'Rp 8.000.000',
                'category' => 'Wearables',
                'image' => 'applewatch7.png',
                'description_page' => 'product_description.php?id=14',
            ],
            // Wireless Earbuds
            [
                'id' => 15,
                'name' => 'Wireless Earbuds',
                'price' => 'Rp 250.000',
                'category' => 'Accessories',
                'image' => 'tws.png',
                'description_page' => 'product_description.php?id=15',
            ],
            // Canon EOS 2000D DSLR
            [
                'id' => 16,
                'name' => 'Canon EOS 2000D DSLR',
                'price' => 'Rp 7.000.000',
                'category' => 'Cameras',
                'image' => '2000d.jpg',
                'description_page' => 'product_description.php?id=16',
            ],
            // GoPro HERO9
            [
                'id' => 17,
                'name' => 'GoPro HERO9',
                'price' => 'Rp 6.500.000',
                'category' => 'Cameras',
                'image' => 'gopro.jpg',
                'description_page' => 'product_description.php?id=17',
            ],
            // Apple MacBook Pro 13
            [
                'id' => 18,
                'name' => 'Apple MacBook Pro 13"',
                'price' => 'Rp 22.000.000',
                'category' => 'Laptops',
                'image' => 'macbook.jpg',
                'description_page' => 'product_description.php?id=18',
            ],
            // Samsung Galaxy Tab S7
            [
                'id' => 19,
                'name' => 'Samsung Galaxy Tab S7',
                'price' => 'Rp 11.000.000',
                'category' => 'Tablets',
                'image' => 'tabs7.jpg',
                'description_page' => 'product_description.php?id=19',
            ],
            // Microsoft Surface Pro 7
            [
                'id' => 20,
                'name' => 'Microsoft Surface Pro 7',
                'price' => 'Rp 14.000.000',
                'category' => 'Tablets',
                'image' => 'surface7.jpg',
                'description_page' => 'product_description.php?id=20',
            ],
            // Samsung 970 EVO SSD 500GB
            [
                'id' => 21,
                'name' => 'Samsung 970 EVO SSD 500GB',
                'price' => 'Rp 1.500.000',
                'category' => 'Storage',
                'image' => '970evo.jpg',
                'description_page' => 'product_description.php?id=21',
            ],
            // Seagate Barracuda 2TB HDD
            [
                'id' => 22,
                'name' => 'Seagate Barracuda 2TB HDD',
                'price' => 'Rp 1.000.000',
                'category' => 'Storage',
                'image' => 'barracuda2tb.jpg',
                'description_page' => 'product_description.php?id=22',
            ],
            // Logitech G Pro X Headset
            [
                'id' => 23,
                'name' => 'Logitech G Pro X Headset',
                'price' => 'Rp 2.500.000',
                'category' => 'Accessories',
                'image' => 'headset.png',
            ],
            // Razer DeathAdder Elite Mouse
            [
                'id' => 24,
                'name' => 'Razer DeathAdder Elite Mouse',
                'price' => 'Rp 900.000',
                'category' => 'Accessories',
                'image' => 'deathadder.jpg',
            ],
            // Samsung 32" Curved Monitor
            [
                'id' => 25,
                'name' => 'Samsung 32" Curved Monitor',
                'price' => 'Rp 6.500.000',
                'category' => 'Monitors',
                'image' => 'samsungcurved.jpg',
            ],
            // Sony 4K TV 50 Inch
            [
                'id' => 26,
                'name' => 'Sony 4K TV 50 Inch',
                'price' => 'Rp 9.000.000',
                'category' => 'TVs',
                'image' => 'sony4k.jpg',
            ],
            // LG OLED 65 Inch TV
            [
                'id' => 27,
                'name' => 'LG OLED 65 Inch TV',
                'price' => 'Rp 30.000.000',
                'category' => 'TVs',
                'image' => 'lgoled.jpg',
            ],
            // Bose SoundLink Bluetooth Speaker
            [
                'id' => 28,
                'name' => 'Bose SoundLink Bluetooth Speaker',
                'price' => 'Rp 3.500.000',
                'category' => 'Accessories',
                'image' => 'bosesoundlink.jpg',
            ],
            // Corsair Vengeance LPX 16GB RAM
            [
                'id' => 29,
                'name' => 'Corsair Vengeance LPX 16GB RAM',
                'price' => 'Rp 1.400.000',
                'category' => 'Components',
                'image' => 'vengeance.jpg',
            ],
            // Intel Core i7-11700K Processor
            [
                'id' => 30,
                'name' => 'Intel Core i7-11700K Processor',
                'price' => 'Rp 5.000.000',
                'category' => 'Components',
                'image' => 'i7-11.jpg',
            ],
            // NVIDIA RTX 3080
            [
                'id' => 31,
                'name' => 'NVIDIA RTX 3080',
                'price' => 'Rp 15.000.000',
                'category' => 'Components',
                'image' => 'rtx3080.jpg',
            ],
            // AMD Ryzen 9 5900X Processor
            [
                'id' => 32,
                'name' => 'AMD Ryzen 9 5900X Processor',
                'price' => 'Rp 10.000.000',
                'category' => 'Components',
                'image' => 'ryzen9.jpg',
            ],
            // ASUS TUF Gaming X570 Motherboard
            [
                'id' => 33,
                'name' => 'ASUS TUF Gaming X570 Motherboard',
                'price' => 'Rp 3.500.000',
                'category' => 'Components',
                'image' => 'asustufmobo.png',
            ],
            // Logitech G213 Keyboard
            [
                'id' => 34,
                'name' => 'Logitech G213 Keyboard',
                'price' => 'Rp 700.000',
                'category' => 'Accessories',
                'image' => 'g213.jpg',
            ],
            // Razer Kraken Headset
            [
                'id' => 35,
                'name' => 'Razer Kraken Headset',
                'price' => 'Rp 1.200.000',
                'category' => 'Accessories',
                'image' => 'kraken.jpg',
            ],
            // HyperX Cloud II Headset
            [
                'id' => 36,
                'name' => 'HyperX Cloud II Headset',
                'price' => 'Rp 1.500.000',
                'category' => 'Accessories',
                'image' => 'cloudii.jpg',
            ],
            // BenQ Zowie XL2411P Monitor
            [
                'id' => 37,
                'name' => 'BenQ Zowie XL2411P Monitor',
                'price' => 'Rp 4.000.000',
                'category' => 'Monitors',
                'image' => 'zowie.jpg',
            ],
            // Samsung Galaxy Watch 4
            [
                'id' => 38,
                'name' => 'Samsung Galaxy Watch 4',
                'price' => 'Rp 3.500.000',
                'category' => 'Wearables',
                'image' => 'galaxywatch4.jpg',
            ],
            // JBL Flip 5 Bluetooth Speaker
            [
                'id' => 39,
                'name' => 'JBL Flip 5 Bluetooth Speaker',
                'price' => 'Rp 1.800.000',
                'category' => 'Accessories',
                'image' => 'jblspeaker.jpeg',
            ],
            // Xiaomi Mi TV Stick
            [
                'id' => 40,
                'name' => 'Xiaomi Mi TV Stick',
                'price' => 'Rp 400.000',
                'category' => 'TVs',
                'image' => 'xiaomistick.png',
            ],
            // LG 43" UHD TV
            [
                'id' => 41,
                'name' => 'LG 43" UHD TV',
                'price' => 'Rp 5.500.000',
                'category' => 'TVs',
                'image' => 'lg43uhd.jpg',
            ],
            // Apple Airpods Pro
            [
                'id' => 42,
                'name' => 'Apple Airpods Pro',
                'price' => 'Rp 3.500.000',
                'category' => 'Accessories',
                'image' => 'airpods.jpg',
            ],
            // Samsung Galaxy Buds Pro
            [
                'id' => 43,
                'name' => 'Samsung Galaxy Buds Pro',
                'price' => 'Rp 2.500.000',
                'category' => 'Accessories',
                'image' => 'galaxybudspro.jpg',
            ],
            // Apple iPad Pro 12.9
            [
                'id' => 44,
                'name' => 'Apple iPad Pro 12.9"',
                'price' => 'Rp 17.000.000',
                'category' => 'Tablets',
                'image' => 'ipadpro12.9.jpg',
            ],
            // Xiaomi Redmi Note 12
            [
                'id' => 45,
                'name' => 'Xiaomi Redmi Note 12',
                'price' => 'Rp 3.000.000',
                'category' => 'Smartphones',
                'image' => 'redminote12.png',
            ],
            // Acer Predator Helios 300
            [
                'id' => 46,
                'name' => 'Acer Predator Helios 300',
                'price' => 'Rp 18.500.000',
                'category' => 'Laptops',
                'image' => 'helios300.jpg',
            ],
            // Microsoft Xbox Series X
            [
                'id' => 47,
                'name' => 'Microsoft Xbox Series X',
                'price' => 'Rp 8.000.000',
                'category' => 'Gaming Consoles',
                'image' => 'xboxseriesx.jpg',
            ],
            // PlayStation 5 Console
            [
                'id' => 48,
                'name' => 'PlayStation 5 Console',
                'price' => 'Rp 9.000.000',
                'category' => 'Gaming Consoles',
                'image' => 'ps5.jpg',
            ],
            // Nintendo Switch OLED Model
            [
                'id' => 49,
                'name' => 'Nintendo Switch OLED Model',
                'price' => 'Rp 7.000.000',
                'category' => 'Gaming Consoles',
                'image' => 'switcholed.jpg',
            ],
            // Acer Nitro 5 Gaming Laptop
            [
                'id' => 50,
                'name' => 'Acer Nitro 5 Gaming Laptop',
                'price' => 'Rp 14.000.000',
                'category' => 'Laptops',
                'image' => 'acernitro5.jpg',
            ],
        ];
        

        // Mengirim data produk ke view
        return view('home', compact('products'));
    }
}
