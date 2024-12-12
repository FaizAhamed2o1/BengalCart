import React from "react";

export default function Footer() {
    return (
        <footer className="bg-gray-800 text-white py-10">
            <div className="container mx-auto px-4 grid grid-cols-1 md:grid-cols-4 gap-8">
                {/* About Section */}
                <div>
                    <h3 className="text-lg font-semibold mb-4">About AliExpress</h3>
                    <ul className="space-y-2 text-sm">
                        <li><a href="#" className="hover:text-gray-300">About Us</a></li>
                        <li><a href="#" className="hover:text-gray-300">Careers</a></li>
                        <li><a href="#" className="hover:text-gray-300">Privacy Policy</a></li>
                        <li><a href="#" className="hover:text-gray-300">Terms of Use</a></li>
                    </ul>
                </div>

                {/* Customer Service */}
                <div>
                    <h3 className="text-lg font-semibold mb-4">Customer Service</h3>
                    <ul className="space-y-2 text-sm">
                        <li><a href="#" className="hover:text-gray-300">Help Center</a></li>
                        <li><a href="#" className="hover:text-gray-300">Contact Us</a></li>
                        <li><a href="#" className="hover:text-gray-300">Shipping Guide</a></li>
                        <li><a href="#" className="hover:text-gray-300">Report Abuse</a></li>
                    </ul>
                </div>

                {/* Sell on AliExpress */}
                <div>
                    <h3 className="text-lg font-semibold mb-4">Sell on AliExpress</h3>
                    <ul className="space-y-2 text-sm">
                        <li><a href="#" className="hover:text-gray-300">Seller Registration</a></li>
                        <li><a href="#" className="hover:text-gray-300">Learning Center</a></li>
                        <li><a href="#" className="hover:text-gray-300">Policies & Rules</a></li>
                    </ul>
                </div>

                {/* Follow Us */}
                <div>
                    <h3 className="text-lg font-semibold mb-4">Follow Us</h3>
                    <div className="flex items-center space-x-4">
                        <a href="#" className="hover:text-gray-300"><i className="fab fa-facebook-f"></i> Facebook</a>
                        <a href="#" className="hover:text-gray-300"><i className="fab fa-twitter"></i> Twitter</a>
                        <a href="#" className="hover:text-gray-300"><i className="fab fa-instagram"></i> Instagram</a>
                    </div>
                </div>
            </div>

            {/* Bottom Section */}
            <div className="border-t border-gray-700 mt-8 pt-4 text-sm text-center">
                <p>&copy; {new Date().getFullYear()} AliExpress Clone. All rights reserved.</p>
                <p className="mt-2">
                    Powered by <a href="#" className="text-blue-400 hover:text-blue-300">YourBrand</a>
                </p>
            </div>
        </footer>
    );
}
