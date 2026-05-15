<?php

namespace App\Controllers;

use Framework\Database;
use Framework\Validation;

class ListingController
{
    protected $db;

    public function __construct()
    {
        $config = require basePath('config/db.php');
        $this->db = new Database($config);
    }
    public function index()
    {

        $listings = $this->db->query('SELECT * FROM listings')->fetchAll();

        loadView('listings/index', ['listings' => $listings]);
    }
    public function create()
    {
        loadView('listings/create');
    }
    public function show($params)
    {
        $id = $params['id'] ?? '';
        $params = [
            'id' => $id
        ];
        $listing = $this->db->query('SELECT * FROM listings WHERE id = :id', $params)->fetch();

        //check if listig exists
        if (!$listing) {
            ErrorController::notFound('Listing not found');
            return;
        }
        loadView('listings/show', ['listing' => $listing]);
    }
    /**
     * store data in database
     *
     * @return void
     */
    public function store()
    {
        $allowedFields = ['title', 'description', 'salary', 'tags', 'company', 'address', 'city', 'state', 'email', 'requirements', 'benefits'];


        $newListingData = array_intersect_key($_POST, array_flip($allowedFields));

        $newListingData['user_id'] = 1; // Assuming user_id is 1 for demonstration
        $newListingData = array_map('sanitize', $newListingData);

        $requiredFields = ['title', 'description', 'salary', 'email', 'city', 'state'];

        $error = [];
        foreach ($requiredFields as $field) {
            $value = $newListingData[$field] ?? '';
            if (empty(trim($value)) || !Validation::string($value)) {
                $error[$field] = ucfirst($field) . ' is required';
            }
        }
        if (!empty($error)) {
            //Reload view with errors
            loadView('listings/create', [
                'error' => $error,
                'listing' => $newListingData
            ]);
        } else {
            //Submit data

            $fields = [];

            foreach ($newListingData as $field => $value) {
                $fields[] = $field;
            }
            $fields = implode(',', $fields);

            $value = [];

            foreach ($newListingData as $field => $value) {
                //concert empty string to null
                if ($value === '') {
                    $newListingData[$field] = null;
                }
                $values[] = ':' . $field;
            }
            $values = implode(',', $values);

            $query = "INSERT INTO listings ({$fields}) VALUES ({$values})";

            $this->db->query($query, $newListingData);

            redirect('/listings');
        }
    }
}
