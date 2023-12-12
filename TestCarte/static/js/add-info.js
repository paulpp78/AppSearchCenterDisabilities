$(document).ready(function () {
    var addInfoForm = $('#addInfoForm');

    addInfoForm.submit(function (event) {
        event.preventDefault();
        var cp = $('#cp').val();
        var commune = $('#commune').val();
        var commune_cog = $('#commune_cog').val();
        var departement = $('#departement').val();
        var region = $('#region').val();
        var region_cog = $('#region_cog').val();
        var handicap_principal = $('#handicap_principal').val();

        var formData = {
            cp: cp,
            commune: commune,
            commune_cog: commune_cog,
            departement: departement,
            region: region,
            region_cog: region_cog,
            handicap_principal: handicap_principal
        };

        $.get('http://localhost/projet_ilie/TestCarte/requeteAPI/Get.php', function (data) {
            var filteredData = data.filter(function(item) {
                return item.cp === 94420;
            });
            console.log(filteredData);
        });
    });
});
