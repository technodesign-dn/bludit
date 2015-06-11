<?php defined('BLUDIT') or die('Bludit CMS.');

// ============================================================================
// Check role
// ============================================================================

if($Login->role()!=='admin') {
	Alert::set('You do not have sufficient permissions to access this page, contact the administrator.');
	Redirect::page('admin', 'dashboard');
}

// ============================================================================
// Functions
// ============================================================================

// ============================================================================
// POST Method
// ============================================================================

if( $_SERVER['REQUEST_METHOD'] == 'POST' )
{
	setSettings($_POST);
}

// ============================================================================
// Main
// ============================================================================
