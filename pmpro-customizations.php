<?php
/*
Plugin Name: PMPro Customizations - Omar
Plugin URI: https://www.paidmembershipspro.com/wp/pmpro-customizations/
Description: Customizations for my Paid Memberships Pro Setup made by Omar
Version: .1
Author: Paid Memberships Pro
Author URI: http://www.strangerstudios.com
*/
//we have to put everything in a function called on init, so we are sure Register Helper is loaded
function my_pmprorh_init()
{
	//don't break if Register Helper is not loaded
	if(!function_exists( 'pmprorh_add_registration_field' )) {
		return false;
	}
	
	pmprorh_add_checkout_box("extra", "Extra Information"); //order parameter defaults to one more than the last checkout box

	
	//define the fields
	$fields = array();
	$fields[] = new PMProRH_Field(
		'firm',						// input name, will also be used as meta key
		'text',							// type of field
		array(
			'label'		=> 'Firm',			// custom field label
			'size'		=> 40,				// input size
			'class'		=> 'firm',			// custom class
			'profile'	=> true,			// show in user profile
			'required'	=> true,			// make this field required
			'levels'		=> array(1,2)		// only levels 1 and 2 should have the company field
		)
	);
	
	$fields[] = new PMProRH_Field(
		'fax',						// input name, will also be used as meta key
		'text',							// type of field
		array(
			'label'		=> 'Fax',			// custom field label
			'size'		=> 40,				// input size
			'class'		=> 'fax',			// custom class
			'profile'	=> true,			// show in user profile
			'required'	=> true,			// make this field required
			'levels'		=> array(1,2)		// only levels 1 and 2 should have the fax field
		)
	);
	
	$fields[] = new PMProRH_Field(
		'bar',						// input name, will also be used as meta key
		'textarea',							// type of field
		array(
			'label'		=> 'Bar admissions and years:',			// custom field label
			'size'		=> 40,				// input size
			'class'		=> 'bar',			// custom class
			'profile'	=> true,			// show in user profile
			'required'	=> true,			// make this field required
			'levels'		=> array(1,2)		// only levels 1 and 2 should have the bar field
		)
	);
	
	$fields[] = new PMProRH_Field(
		'committees',							// input name, will also be used as meta key
		'checkbox_grouped',							// type of field
		array(
		    	'label'		=> 'Committees I would like to serve on (click all that apply):',
		    	'profile'	=> true,
			'options' => array(				// <option> elements for select field
				
				'annualdinnerandelection'	=> 'Annual Dinner & Election',
'annualprograms'	=> 'Annual Programs',
'barassociationliaison'	=> 'Bar Association Liaison',
'bylaws'	=> 'By-Laws',
'cle'	=> 'Continuing Legal Education (CLE)',
'diversity'	=> 'Diversity Committee',
'Era'	=> 'ERA Committee',
'judicial'	=> 'Judicial Appointments',
'legislation'	=> 'Legislation & Litigation',
'membership'	=> 'Membership',
'membersintransition'	=> 'Members in Transition',
'newsletter'	=> 'Newsletter',
'nominating'	=> 'Nominating Committee',
'publicity'	=> 'Publicity',
'sponsorship'	=> 'Sponsorship & Advertising',
'website'	=> 'Website',
'wric'	=> 'Women’s Rights Information Center (WRIC)',
'yld'	=> 'Young Lawyers Division (YLD)',
'directorsatlarge'	=> 'Directors at Large',
			)
		)
	);
	
	
	//add the fields into a new checkout_boxes are of the checkout page
	foreach($fields as $field)
		pmprorh_add_registration_field(
			'extra',				// location on checkout page
			$field						// PMProRH_Field object
		);
	//that's it. see the PMPro Register Helper readme for more information and examples.
}

add_action( 'init', 'my_pmprorh_init' );

function my_pmprorh_initdirectory()
{
	//don't break if Register Helper is not loaded
	if(!function_exists( 'pmprorh_add_registration_field' )) {
		return false;
	}
	
	pmprorh_add_checkout_box("online", "Online Directory", "(This additional  information will be used to update the WLIB online directory so please fill out this form carefully).");
	
	//define the fields
	$fields = array();
	$fields[] = new PMProRH_Field(
		'clerkship',						// input name, will also be used as meta key
		'text',						// type of field
		array(
			'label'	=> 'Clerkship',		// custom field label
			'size'		=> 40,				// input size
			'class'	=> 'clerkship',		// custom class
			'profile'	=> true,			
			'required'	=> true,			
			'levels'		=> array(1,2)		
		)
	);
	
	$fields[] = new PMProRH_Field(
		'trialattorneycert',						// input name, will also be used as meta key
		'text',						// type of field
		array(
			'label'	=> 'Trial Attorney Certification',		// custom field label
			'size'		=> 40,				// input size
			'class'	=> 'trialattorneycert',		// custom class
			'profile'	=> true,			
			'required'	=> true,			
			'levels'		=> array(1,2)		
		)
	);

$fields[] = new PMProRH_Field(
		'honors',						// input name, will also be used as meta key
		'textarea',						// type of field
		array(
			'label'	=> 'Honors / Activities',		// custom field label
			'size'		=> 40,				// input size
			'class'	=> 'honors',		// custom class
			'profile'	=> true,			
			'required'	=> true,			
			'levels'		=> array(1,2)		
		)
	);


$fields[] = new PMProRH_Field(
		'publisheddecisions',						// input name, will also be used as meta key
		'textarea',						// type of field
		array(
			'label'	=> 'Published Decisions',		// custom field label
			'size'		=> 40,				// input size
			'class'	=> 'publisheddecisions',		// custom class
			'profile'	=> true,			
			'required'	=> true,			
			'levels'		=> array(1,2)		
		)
	);
	
	
	//add the fields into a new checkout_boxes are of the checkout page
	foreach($fields as $field)
		pmprorh_add_registration_field(
			'online',				// location on checkout page
			$field						// PMProRH_Field object
		);
	//that's it. see the PMPro Register Helper readme for more information and examples.
}

add_action( 'init', 'my_pmprorh_initdirectory' );

function my_pmprorh_initareas()
{
	//don't break if Register Helper is not loaded
	if(!function_exists( 'pmprorh_add_registration_field' )) {
		return false;
	}
	
	pmprorh_add_checkout_box("areascon", "Areas Of Concentration", "(please limit to seven choices max)");
	
	//define the fields
	$fields[] = new PMProRH_Field(
		'areasofpractice',							// input name, will also be used as meta key
		'checkbox_grouped',							// type of field
		array(
		    	'label'		=> 'My areas of practice include:',
		    	'profile'	=> true,
			'options' => array(				// <option> elements for select field
				
'administrativelaw'	=> 'Administrative Law',
'adrmediation'	=> 'Adr / Mediation',
'appeals'	=> 'Appeals',
'administrativelaw'	=> 'Administrative Law',
'adrmediation'	=> 'Adr / Mediation',
'appeals'	=> 'Appeals',
'banking'	=> 'Banking',
'bankruptcy'	=> 'Bankruptcy',
'civilrights'	=> 'Civil Rights',
'commerciallitigation'	=> 'Commercial Litigation',
'collections'	=> 'Collections',
'consumerprotection'	=> 'Consumer Protection',
'constructionlaw'	=> 'Construction Law',
'contracts'	=> 'Contracts',
'corporatelaw'	=> 'Corporate Law',
'criminallaw'	=> 'Criminal Law',
'elderlaw'	=> 'Elder Law',
'employmentlaw'	=> 'Employment Law',
'employmentlawemployee'	=> 'Employment Law (Employee)',
'employmentlawemployer'	=> 'Employment Law (Employer)',
'environmentallaw'	=> 'Environmental Law',
'estates'	=> 'Estates',
'estatesadministration'	=> 'Estates (Administration)',
'Estatesguardianships'	=> 'Estates (Guardianships)',
'estatesplanning'	=> 'Estates (Planning)',
'familylaw'	=> 'Family Law',
'familylawdivorcecustody'	=> 'Family Law (Divorce / Custody)',
'familylawjuvenile'	=> 'Family Law (Juvenile)',
'familylawadoption'	=> 'Family Law (Adoption)',
'healthcare'	=> 'Health Care',
'immigration'	=> 'Immigration',
'insurance'	=> 'Insurance',
'landuse'	=> 'Land Use',
'landlordtenant'	=> 'Landlord / Tenant',
'municipallaw'	=> 'Municipal Law',
'negligence'	=> 'Negligence',
'negligencegeneral'	=> 'Negligence (General)',
'negligencemedicalmalpractice'	=> 'Negligence (Medical Malpractice)',
'nursinghome'	=> 'Nursing Home',
'patenttrademark'	=> 'Patent / Trademark & Copyright',
'publicutility'	=> 'Public Utility',
'realestate'	=> 'Real Estate',
'realestateresidential'	=> 'Real Estate (Residential)',
'realestatecommercial'	=> 'Real Estate (Commercial)',
'realestatecondos)'	=> 'Real Estate (Condominiums)',
'schoolaw'	=> 'School Law',
'securities'	=> 'Securities',
'socialsecuritydisability'	=> 'Social Security / Disability',
'taxation'	=> 'Taxation',
'workerscomp'	=> 'Workers Comp',
'other'	=> 'Other',

			)
		)
	);	
	
	$fields[] = new PMProRH_Field(
		'onlineconsent',							// input name, will also be used as meta key
		'checkbox',							// type of field
		array(
		    	'label'		=> 'I hereby consent to have my name and areas of concentration (up to seven) published in an online directory.',
		    	'profile'	=> true,
'required'	=> true,
			'options' => array(				// <option> elements for select field
				
'yes'	=> 'Yes',

			)
		)
	);
	
	//add the fields into a new checkout_boxes are of the checkout page
	foreach($fields as $field)
		pmprorh_add_registration_field(
			'areascon',				// location on checkout page
			$field						// PMProRH_Field object
		);
	//that's it. see the PMPro Register Helper readme for more information and examples.
}

add_action( 'init', 'my_pmprorh_initareas' );

/**
 * Add Website and Biographical Info to Membership Checkout
 */
function my_default_wp_user_checkout_fields() {
	if ( class_exists( 'PMProRH_Field') ) {
		pmprorh_add_checkout_box( 'additional', 'Additional Information' );
		$fields = array();
	
		//user_url field
		$fields[] = new PMProRH_Field(
			'url', 
			'text', 
			array(
				'label'=>'Website (example www.mysite.com)',
				'size'=>40,
				'profile'=>true,
				'required'=>false,
			)
		);

		//user_description field
		$fields[] = new PMProRH_Field(
			'description', 
			'textarea', 
			array(
				'label'=>'Biographical Info',
				'size'=>40,
				'profile'=>true,
				'required'=>false,
			)
		);

		foreach( $fields as $field ) {
			pmprorh_add_registration_field( 'additional', $field );	
		}
	}
}
add_action( 'init', 'my_default_wp_user_checkout_fields' );

/**
 * Add Contact Form 7 to the Profile page when using the Member Directory and Profiles Add On for Paid Memberships Pro.
 * Update line 36 with the correct CF7 shortcode for your desired form to display.
 * Add a hidden field to your form: "[hidden send-to-email default:shortcode_attr]".
 * Set the "To" field of the Contact Form to "[send-to-email]".
 *
 */

// Allow custom shortcode attribute for "send-to-email". 
function custom_shortcode_atts_wpcf7_filter( $out, $pairs, $atts ) {
	$my_attr = 'send-to-email'; 
	if ( isset( $atts[$my_attr] ) ) {
		$out[$my_attr] = $atts[$my_attr];
	}
	return $out;
}
add_filter( 'shortcode_atts_wpcf7', 'custom_shortcode_atts_wpcf7_filter', 10, 3 );

// Add the contact form to the profile page using Contact Form 7.
function append_profile_page_with_cf7( $content ) {
	global $pmpro_pages;

	//Get the profile user
	if ( isset( $_REQUEST['pu'] ) ) {
		if ( is_numeric($_REQUEST['pu'] ) ) {
			$pu = get_user_by( 'id', $_REQUEST['pu'] );
		} elseif( ! empty( $_REQUEST['pu'] ) ) {
			$pu = get_user_by( 'slug', $_REQUEST['pu'] );
		} else {
			$pu = false;
		}
	}

	if ( ! empty( $pu ) && shortcode_exists( 'contact-form-7' ) && is_page( $pmpro_pages['profile'] ) ) {
		$content .= do_shortcode( '[contact-form-7 id="223" title="Member Contact" send-to-email="' . $pu->user_email . '"]' );
	}
	return $content;
}
add_filter( 'the_content', 'append_profile_page_with_cf7' );

/**
 * Plugin Name: My PMPro Directory Widget
 * Description: Add widget to Member Directory page to filter results.
 */
class My_PMPro_Directory_Widget extends WP_Widget {

	/**
	 * Sets up the widget
	 */
	public function __construct() {
		parent::__construct(
			'my_pmpro_directory_widget',
			'My PMPro Directory Widget',
			array( 'description' => 'Filter the PMPro Member Directory' )
		);
	}

	/**
	 * Code that runs on the frontend.
	 *
	 * Modify the content in the <li> tags to
	 * create filter inputs in the sidebar
	 */
	public function widget( $args, $instance ) {
		// If we're not on a page with a PMPro directory, return.
		global $post;
		if ( ! is_a( $post, 'WP_Post' ) || ! has_shortcode( $post->post_content, 'pmpro_member_directory' ) ) {
			return;
		}
		?>
		<aside id="my_pmpro_directory_widget" class="widget my_pmpro_directory_widget">
			<h3 class="widget-title">Filter Directory</h3>
			<form>
				<ul>
					<li>
<strong>By Area of Practice:</strong><br/>
<?php
// Set up values to filter for.
$areas = array(
'administrativelaw'	=> 'Administrative Law',
'adrmediation'	=> 'Adr / Mediation',
'appeals'	=> 'Appeals',
'administrativelaw'	=> 'Administrative Law',
'adrmediation'	=> 'Adr / Mediation',
'appeals'	=> 'Appeals',
'banking'	=> 'Banking',
'bankruptcy'	=> 'Bankruptcy',
'civilrights'	=> 'Civil Rights',
'commerciallitigation'	=> 'Commercial Litigation',
'collections'	=> 'Collections',
'consumerprotection'	=> 'Consumer Protection',
'constructionlaw'	=> 'Construction Law',
'contracts'	=> 'Contracts',
'corporatelaw'	=> 'Corporate Law',
'criminallaw'	=> 'Criminal Law',
'elderlaw'	=> 'Elder Law',
'employmentlaw'	=> 'Employment Law',
'employmentlawemployee'	=> 'Employment Law (Employee)',
'employmentlawemployer'	=> 'Employment Law (Employer)',
'environmentallaw'	=> 'Environmental Law',
'estates'	=> 'Estates',
'estatesadministration'	=> 'Estates (Administration)',
'Estatesguardianships'	=> 'Estates (Guardianships)',
'estatesplanning'	=> 'Estates (Planning)',
'familylaw'	=> 'Family Law',
'familylawdivorcecustody'	=> 'Family Law (Divorce / Custody)',
'familylawjuvenile'	=> 'Family Law (Juvenile)',
'familylawadoption'	=> 'Family Law (Adoption)',
'healthcare'	=> 'Health Care',
'immigration'	=> 'Immigration',
'insurance'	=> 'Insurance',
'landuse'	=> 'Land Use',
'landlordtenant'	=> 'Landlord / Tenant',
'municipallaw'	=> 'Municipal Law',
'negligence'	=> 'Negligence',
'negligencegeneral'	=> 'Negligence (General)',
'negligencemedicalmalpractice'	=> 'Negligence (Medical Malpractice)',
'nursinghome'	=> 'Nursing Home',
'patenttrademark'	=> 'Patent / Trademark & Copyright',
'publicutility'	=> 'Public Utility',
'realestate'	=> 'Real Estate',
'realestateresidential'	=> 'Real Estate (Residential)',
'realestatecommercial'	=> 'Real Estate (Commercial)',
'realestatecondos)'	=> 'Real Estate (Condominiums)',
'schoolaw'	=> 'School Law',
'securities'	=> 'Securities',
'socialsecuritydisability'	=> 'Social Security / Disability',
'taxation'	=> 'Taxation',
'workerscomp'	=> 'Workers Comp',
'other'	=> 'Other',
						);
foreach ( $areas as $key => $value ) {
// Check if this value should default to be checked.
$checked_modifier = '';
if ( ! empty( $_REQUEST['areasofpractice'] ) && in_array( $key, $_REQUEST['areasofpractice'] ) ) {
$checked_modifier = ' checked';
							}
// Add checkbox.
echo '<input type="checkbox" name="areasofpractice[]" value="' . $key . '"' . $checked_modifier . '><label> ' . $value . '</label><br/>';
						}
?>
</li>
			
				</ul>
				<input type="submit" value="Filter">
			</form>
		</aside>
		<?php
	}

}
function my_pmpro_directory_widget_filter_sql_parts( $sql_parts, $levels, $s, $pn, $limit, $start, $end, $order_by, $order ) {
global $wpdb;

// Filter results based on ares of practice is selected.
if ( ! empty( $_REQUEST['areasofpractice'] ) && is_array( $_REQUEST['areasofpractice'] ) ) {
$sql_parts['JOIN'] .= " LEFT JOIN $wpdb->usermeta areasofpractice ON areasofpractice.meta_key = 'areasofpractice' AND u.ID = areasofpractice.user_id ";
$sql_parts['WHERE'] .= " AND areasofpractice.meta_value in ('" . implode( "','", $_REQUEST['areasofpractice'] ) . "') ";
	}

return $sql_parts;
}
add_filter( 'pmpro_member_directory_sql_parts', 'my_pmpro_directory_widget_filter_sql_parts', 10, 9 );


/**
 * Registers widget.
 */
function my_pmpro_register_directory_widget() {
	register_widget( 'My_PMPro_Directory_Widget' );
}
add_action( 'widgets_init', 'my_pmpro_register_directory_widget' );


/*
Add bcc for PMPro admin emails
*/
function my_pmpro_email_headers_admin_emails($headers, $email)
{		
	//bcc emails already going to admin_email
        if(strpos($email->template, "_admin") !== false)
	{
		//add bcc
		$headers[] = "Bcc:" . "dianeluci@aol.com";		
	}
 
	return $headers;
}
add_filter("pmpro_email_headers", "my_pmpro_email_headers_admin_emails", 10, 2);
