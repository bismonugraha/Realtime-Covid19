function getDataIndonesia() {
    fetch('https://indonesia-covid-19.mathdro.id/api')
        .then(response => response.json())
        .then(data => {
            console.log(data)

            let perawatan = data.perawatan
            let positif = data.jumlahKasus
            let sembuh = data.sembuh
            let meninggal = data.meninggal

            document.getElementById("data-perawatan").innerHTML = perawatan
            document.getElementById("data-positif").innerHTML = positif
            document.getElementById("data-sembuh").innerHTML = sembuh
            document.getElementById("data-meninggal").innerHTML = meninggal
        })
        .catch(err => {
            console.log(err)
        });
}