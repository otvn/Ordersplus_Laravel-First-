@extends('layouts.layout')
@section('content')
<!-- You can open the modal using ID.showModal() method -->
<!-- Modal Background -->
<!-- Button to Open Modal -->
<!-- Button to Open Modal (Centered) -->
<div class="flex items-center justify-center h-screen">
    <button class="px-6 py-3 bg-white hover:bg-red-500 border-2 border-red-500 text-black rounded-full hover:bg-blue-600 focus:outline-none" id="openModalButton">
       Add Record
    </button>
</div>

<!-- Modal Background (Initially hidden) -->
<div class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 z-50 hidden" id="modal">
    <!-- Modal Container -->
    <div class="bg-white rounded-lg shadow-lg w-96 p-6">
        <!-- Modal Header -->
        <div class="flex justify-between items-center">
            <h2 class="text-xl font-semibold">CRUD</h2>
            <button class="text-gray-500 hover:text-gray-700" onclick="closeModal()">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
        <!-- Modal Body (Form) -->
        <div class="mt-4">
            <form action="InsertData" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Product Name -->
                <div class="mb-4">
                    <label for="productName" class="block text-sm font-medium text-gray-700">Enter Product Name</label>
                    <input type="text" id="productName" name="pname" class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <!-- Product Price -->
                <div class="mb-4">
                    <label for="productPrice" class="block text-sm font-medium text-gray-700">Enter Product Price</label>
                    <input type="number" id="productPrice" name="pprice" class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <!-- File Input -->
                <div class="mb-4">
                    <label for="fileInput" class="block text-sm font-medium text-gray-700">Choose file</label>
                    <input type="file" id="fileInput" name="image" class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <p id="fileName" class="mt-2 text-sm text-gray-600">No file chosen</p>
                </div>
                <!-- Add Record Button -->
                <div class="flex justify-between items-center mt-4">
                    <button type="submit" class="px-6 py-2 bg-red-500 text-white rounded-md hover:bg-red-600 focus:outline-none">Add Record</button>
                    <button type="button" class="px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600 focus:outline-none" onclick="closeModal()">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Script to Open and Close Modal -->
<script>
    // Get modal and button
    const modal = document.getElementById('modal');
    const openModalButton = document.getElementById('openModalButton');
    const fileInput = document.getElementById('fileInput');
    const fileName = document.getElementById('fileName');

    // Open modal when the button is clicked
    openModalButton.addEventListener('click', function() {
        modal.classList.remove('hidden');
    });

    // Close modal
    function closeModal() {
        modal.classList.add('hidden');
    }

    // Update file name on file select
    fileInput.addEventListener('change', function() {
        const selectedFile = fileInput.files[0];
        if (selectedFile) {
            fileName.textContent = selectedFile.name;
        } else {
            fileName.textContent = 'No file chosen';
        }
    });
</script>



@endsection