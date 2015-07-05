
$(function() {
var cities = [
"Agra",
"Banglore",
"Chandigarh",
"Chennai",
"Delhi",
"Faridabad",
"Ghaziabad",
"Gurgaon",
"Greater Noida",
"Hyderabad",
"Karnal",
"Kolkata",
"Kurukshetra",
"Lucknow",
"Mumbai",
"New Delhi",
"Noida",
"Panipat",
"Pune",
"Rohtak",
"Shimla",
"Sonipat"
];
$( "#city" ).autocomplete({
source: cities
});
});

