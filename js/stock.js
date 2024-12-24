// Mengambil referensi ke tabel
const tableBody = document.querySelector('tbody');

// Fungsi untuk menambahkan baris ke tabel
function addRowToTable(data) {
  const newRow = document.createElement('tr');
  newRow.innerHTML = `
    <td>${data.gambar}</td>
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
  // Implementasi form tambah barang di sini
}

// Fungsi untuk menampilkan form edit barang
function showEditForm(id) {
  // Implementasi form edit barang di sini
}

// Event listener untuk tombol tambah barang
const addButton = document.querySelector('.btn-primary');
addButton.addEventListener('click', showAddForm);

// Event listener untuk tombol edit barang
tableBody.addEventListener('click', (event) => {
  if (event.target.classList.contains('btn-primary')) {
    const row = event.target.closest('tr');
    const id = row.querySelector('td:nth-child(2)').textContent; // Mengambil ID barang dari kolom kedua
    showEditForm(id);
  }
});

// Inisialisasi data awal (bisa diambil dari server atau hard-coded)
const initialData = [
  { gambar: 'gambar1.jpg', id_barang: '001', nama: 'Barang 1', satuan: 'pcs', stok: 100 },
  { gambar: 'gambar2.jpg', id_barang: '002', nama: 'Barang 2', satuan: 'kg', stok: 50 },
  // Tambahkan data lainnya di sini
];

// Menambahkan data awal ke tabel saat halaman dimuat
initialData.forEach(addRowToTable);

// Fungsi untuk menampilkan form tambah barang
function showAddForm() {
    // Buat sebuah form sederhana
    const form = `
      <form id="add-form" class="mb-3">
        <div class="mb-3">
          <label for="gambar" class="form-label">URL Gambar:</label>
          <input type="text" class="form-control" id="gambar" required>
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
  
    // Masukkan form ke dalam elemen dengan kelas 'container-xxl'
    document.querySelector('.container-xxl').insertAdjacentHTML('beforeend', form);
  
    // Tambahkan event listener untuk menghandle submit form
    const addForm = document.getElementById('add-form');
    addForm.addEventListener('submit', (event) => {
      event.preventDefault(); // Mencegah pengiriman form
      // Ambil data dari form
      const gambar = document.getElementById('gambar').value;
      const id_barang = document.getElementById('id_barang').value;
      const nama = document.getElementById('nama').value;
      const satuan = document.getElementById('satuan').value;
      const stok = parseInt(document.getElementById('stok').value);
  
      // Buat objek data baru
      const newData = { gambar, id_barang, nama, satuan, stok };
  
      // Tambahkan data baru ke tabel
      addRowToTable(newData);
  
      // Reset form
      addForm.reset();
    });
  }
  
