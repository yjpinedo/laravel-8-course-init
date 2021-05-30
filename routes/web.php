<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FluentController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// *** Componentes ***
//Route::get('/', [ProductController::class, 'index'])->name('products.index');

// HTTP Client
/* Route::get('posts', [ClientController::class, 'getAllPosts'])->name('posts.getAllPosts');
Route::get('posts/{id}', [ClientController::class, 'getOnePost'])->name('posts.getOnePost');
Route::get('add-posts', [ClientController::class, 'addPost'])->name('posts.addPost');
Route::get('update-posts', [ClientController::class, 'updatePost'])->name('posts.updatePost');
Route::get('delete-post/{id}', [ClientController::class, 'deletePost'])->name('posts.deletePost'); */

//Route::get('fluents', [FluentController::class, 'index'])->name('fluents.index');

/* *** Sesiones ***
Route::get('sessions/get', [SessionController::class, 'index'])->name('sessions.index');
Route::get('sessions/set', [SessionController::class, 'store'])->name('sessions.store');
Route::get('sessions/delete', [SessionController::class, 'delete'])->name('sessions.delete');*/


// Query Builder
/*Route::get('users', [UserController::class, 'index'])->name('users.index');
Route::post('users', [UserController::class, 'store'])->name('users.store');
Route::get('users/create', [UserController::class, 'create'])->name('users.create');
Route::get('users/{id}', [UserController::class, 'show'])->name('users.show');
Route::put('users/{id}', [UserController::class, 'update'])->name('users.update');
Route::delete('users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
Route::get('users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');*/

// Send Email
//Route::get('send-email', [MailController::class, 'sendEmail'])->name('mails.sendEmail');

// Relationship
//  One to One
/*Route::get('users-phone', [UserController::class, 'storePhone'])->name('users.storePhone');
Route::get('users-phone-get/{id}', [UserController::class, 'getUserPhone'])->name('users.getUserPhone');*/

// One To Many

/*Route::get('posts-comments-store', [PostController::class, 'postCommentStore'])->name('posts.postCommentStore');
Route::get('posts-store', [PostController::class, 'postStore'])->name('posts.postStore');
Route::get('comments-store/{id}', [PostController::class, 'commentStore'])->name('posts.commentStore');
Route::get('commets-post-get/{id}', [PostController::class, 'getCommentsPost'])->name('posts.getCommentsPost');*/

// Many to Many

/*Route::get('role-store', [RoleController::class, 'roleStore'])->name('roles.roleStore');
Route::get('user-store', [RoleController::class, 'userStore'])->name('roles.userStore');
Route::get('role-user-store/{id}', [RoleController::class, 'roleUserStore'])->name('roles.roleUserStore');
Route::get('role-user-get/{id}', [RoleController::class, 'getRoleUser'])->name('roles.getRoleUser');
Route::get('user-role-get/{id}', [RoleController::class, 'getUserRole'])->name('roles.getUserRole');*/

// Expor xlsx - csv

/*Route::get('export-employee', [EmployeeController::class, 'export']);
Route::get('export-employee-csv', [EmployeeController::class, 'exportCSV']);*/


// Export PDF and import CSV

/* Route::get('employees', [EmployeeController::class, 'index']);
Route::get('employees-export-pdf', [EmployeeController::class, 'exportPDF']); */

// Import
// Route::post('employees-import-CSV', [EmployeeController::class, 'importCSV'])->name('employees.importCSV');

// Images
/*Route::get('images-resize', [ImageController::class, 'resizeImage'])->name('images.resizeImage');
Route::post('image-resize-store', [ImageController::class, 'resizeImageStore'])->name('images.resizeImageStore');
Route::get('dropzone', [ImageController::class, 'dropzone'])->name('images.dropzone');
Route::post('dropzone-store', [ImageController::class, 'dropzoneStore'])->name('images.dropzoneStore');
Route::get('images-gallery', [ImageController::class, 'gallery'])->name('images.gallery');*/

// TinyMCE WYSIWYG HTML Editor

// Route::get('editor', [EditorController::class, 'editor']);

// CRUD - Images
/*Route::get('students', [StudentController::class, 'index'])->name('students.index');
Route::post('studens', [StudentController::class, 'store'])->name('students.store');
Route::get('students/create', [StudentController::class, 'create'])->name('students.create');
Route::put('students/{id}', [StudentController::class, 'update'])->name('students.update');
Route::delete('students/{id}', [StudentController::class, 'destroy'])->name('students.destroy');
Route::get('students/{id}/edit', [StudentController::class, 'edit'])->name('students.edit');*/

// Form - contact - to gmail
/*Route::get('contact', [ContactController::class, 'contact']);
Route::post('contact-send-email', [ContactController::class, 'sendEmailByGmail'])->name('contacts.sendEmailByGmail');*/

// Helpers dspues de agregar los archivos ejecutar el comando dump-autoload
/*Route::get('/helpers', function(){
    return splitName('Daniela Rosado');
});*/

// Autocomplete search
/*Route::get('search', [ProductController::class, 'search']);
Route::get('auto-complete', [ProductController::class, 'autoComplete'])->name('searchs.autoComplete');*/

// Create archive zip
//Route::get('download-zip', [ImageController::class, 'zipFile']);

// DataTable
//Route::get('employee-datatables', [EmployeeController::class, 'indexDataTable']);