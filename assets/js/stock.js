// Mengambil referensi ke tabel
const tableBody = document.querySelector('#stock-table-body');

// Fungsi untuk menambahkan baris ke tabel
function addRowToTable(data) {
  const newRow = document.createElement('tr');
  newRow.innerHTML = `
    <td><img src="${data.gambar}" alt="Gambar" style="max-width: 100px;"></td>
    <td>${data.id_barang}</td>
    <td>${data.nama}</td>
    <td>${data.satuan}</td>
    <td>${data.stok}</td>
    <td>
      <button class="btn btn-sm btn-primary">Edit</button>
    </td>
  `;
  tableBody.appendChild(newRow);
}

// Fungsi untuk menampilkan form tambah barang
function showAddForm() {
  // Buat sebuah form sederhana
  const form = `
    <form id="add-form" class="mb-3">
      <div class="mb-3">
        <label for="gambar" class="form-label">Gambar:</label>
        <input type="file" class="form-control" id="gambar" accept="image/*" required>
      </div>
      <div class="mb-3">
        <label for="id_barang" class="form-label">ID Barang:</label>
        <input type="text" class="form-control" id="id_barang" required>
      </div>
      <div class="mb-3">
        <label for="nama" class="form-label">Nama Barang:</label>
        <input type="text" class="form-control" id="nama" required>
      </div>
      <div class="mb-3">
        <label for="satuan" class="form-label">Satuan:</label>
        <input type="text" class="form-control" id="satuan" required>
      </div>
      <div class="mb-3">
        <label for="stok" class="form-label">Stok:</label>
        <input type="number" class="form-control" id="stok" required>
      </div>
      <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
  `;

  // Masukkan form di atas tabel
  tableBody.insertAdjacentHTML('beforebegin', form);

  // Tambahkan event listener untuk menghandle submit form
  const addForm = document.getElementById('add-form');
  addForm.addEventListener('submit', (event) => {
    event.preventDefault(); // Mencegah pengiriman form
    // Ambil data dari form
    const gambar = document.getElementById('gambar').files[0];
    const id_barang = document.getElementById('id_barang').value;
    const nama = document.getElementById('nama').value;
    const satuan = document.getElementById('satuan').value;
    const stok = parseInt(document.getElementById('stok').value);

    // Buat objek data baru
    const newData = { id_barang, nama, satuan, stok };

    // Simpan gambar ke server (Simulasi)
    saveImageToServer(gambar).then((imageUrl) => {
      newData.gambar = imageUrl; // URL gambar disimpan ke dalam objek data baru

      // Tambahkan data baru ke tabel
      addRowToTable(newData);

      // Reset form
      addForm.reset();
    });
  });
}

// Fungsi untuk menyimpan gambar ke server (Simulasi)
function saveImageToServer(image) {
  return new Promise((resolve, reject) => {
    // Simulasi proses penyimpanan gambar ke server
    setTimeout(() => {
      // Untuk simulasi, kembalikan URL gambar
      resolve(URL.createObjectURL(image));
    }, 1000); // Simulasi waktu proses 1 detik
  });
}

// Event listener untuk tombol tambah barang
const addButton = document.getElementById('add-item-btn');
addButton.addEventListener('click', showAddForm);

// Inisialisasi data awal (bisa diambil dari server atau hard-coded)
const initialData = [
  { gambar: 'afrida.png', id_barang: '001', nama: 'Barang 1', satuan: 'pcs', stok: 100 },
  { gambar: 'afrida.png', id_barang: '002', nama: 'Barang 2', satuan: 'kg', stok: 50 },
  // Tambahkan data lainnya di sini
];

// Menambahkan data awal ke tabel saat halaman dimuat
initialData.forEach(addRowToTable);
