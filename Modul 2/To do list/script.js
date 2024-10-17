// Fungsi untuk menambahkan task baru
function addTask() {
    const taskInput = document.getElementById('task-input');
    const taskText = taskInput.value.trim();

    if (taskText === '') {
        alert('Task cannot be empty!');
        return;
    }

    const taskList = document.getElementById('task-list');

    // Membuat elemen list baru
    const li = document.createElement('li');
    
    // Input field untuk task yang bisa diedit
    const taskEditInput = document.createElement('input');
    taskEditInput.type = 'text';
    taskEditInput.value = taskText;
    taskEditInput.disabled = true;

    // Tombol edit dengan ikon pensil
    const editBtn = document.createElement('button');
    editBtn.innerHTML = '<i class="fas fa-edit"></i>';
    editBtn.classList.add('edit-btn');
    editBtn.onclick = function () {
        if (taskEditInput.disabled) {
            // Mengaktifkan input untuk diedit
            taskEditInput.disabled = false;
            taskEditInput.focus();
            editBtn.innerHTML = '<i class="fas fa-save"></i>'; // Mengubah ikon ke "save"
        } else {
            // Menyimpan perubahan dan menonaktifkan input
            taskEditInput.disabled = true;
            editBtn.innerHTML = '<i class="fas fa-edit"></i>'; // Mengembalikan ikon ke "edit"
        }
    };

    // Tombol hapus dengan ikon tong sampah
    const deleteBtn = document.createElement('button');
    deleteBtn.innerHTML = '<i class="fas fa-trash"></i>';
    deleteBtn.onclick = function () {
        taskList.removeChild(li);
    };

    // Menambahkan input dan tombol ke elemen li
    li.appendChild(taskEditInput);
    li.appendChild(editBtn);
    li.appendChild(deleteBtn);

    // Menambahkan li ke taskList
    taskList.appendChild(li);

    // Mengosongkan input field
    taskInput.value = '';
}