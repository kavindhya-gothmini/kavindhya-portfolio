<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profile;
use App\Models\Category;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Experience;
use App\Models\Education;
use App\Models\Certification;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        /*
        |--------------------------------------------------------------------------
        | PROFILE
        |--------------------------------------------------------------------------
        */

        Profile::create([
            'full_name' => 'Kavindhya Gothmini Thilakarathna',

            'professional_title' =>
                'Software Engineering Graduate | Software Developer | IT & Network Enthusiast',

            'tagline' =>
                'Building practical software solutions through software engineering, web technologies, data, and emerging technologies.',

            'short_bio' =>
                'Software Engineering graduate with practical experience in software development, IT support, networking, databases, and business systems.',

            'about' =>
                'I am a Software Engineering graduate with a strong interest in software development, web technologies, databases, software testing, data analytics, and emerging technologies. I enjoy transforming business requirements into practical and user-friendly software solutions.',

            'career_objective' =>
                'To develop my professional career as a Software Engineer while continuously improving my technical, analytical, problem-solving, and professional skills.',

            'email' => null,

            'phone' => null,

            'linkedin_url' => null,

            'github_url' => null,

            'profile_image' => null,
        ]);


        /*
        |--------------------------------------------------------------------------
        | CATEGORIES
        |--------------------------------------------------------------------------
        */

        $categories = [
            'Software Engineering',
            'Web Development',
            'Laravel & PHP',
            'Database & SQL',
            'Microsoft Power Platform',
            'Data Analytics',
            'Data Science',
            'Software Testing',
            'Networking',
            'Artificial Intelligence',
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category,
                'slug' => \Illuminate\Support\Str::slug($category),
            ]);
        }


        /*
        |--------------------------------------------------------------------------
        | SKILLS
        |--------------------------------------------------------------------------
        */

        $skills = [

            // Programming
            [
                'name' => 'PHP',
                'category' => 'Programming',
                'proficiency' => 85,
            ],

            [
                'name' => 'JavaScript',
                'category' => 'Programming',
                'proficiency' => 75,
            ],

            [
                'name' => 'HTML & CSS',
                'category' => 'Web Development',
                'proficiency' => 90,
            ],

            // Frameworks
            [
                'name' => 'Laravel',
                'category' => 'Framework',
                'proficiency' => 85,
            ],

            [
                'name' => 'Bootstrap',
                'category' => 'Framework',
                'proficiency' => 85,
            ],

            [
                'name' => 'Vite',
                'category' => 'Frontend Tools',
                'proficiency' => 70,
            ],

            // Database
            [
                'name' => 'MySQL',
                'category' => 'Database',
                'proficiency' => 85,
            ],

            [
                'name' => 'SQL',
                'category' => 'Database',
                'proficiency' => 85,
            ],

            // Software Engineering
            [
                'name' => 'Object-Oriented Programming',
                'category' => 'Software Engineering',
                'proficiency' => 80,
            ],

            [
                'name' => 'MVC Architecture',
                'category' => 'Software Engineering',
                'proficiency' => 85,
            ],

            [
                'name' => 'UML & System Design',
                'category' => 'Software Engineering',
                'proficiency' => 80,
            ],

            [
                'name' => 'Software Testing',
                'category' => 'Software Engineering',
                'proficiency' => 75,
            ],

            // Microsoft
            [
                'name' => 'Power BI',
                'category' => 'Microsoft Power Platform',
                'proficiency' => 75,
            ],

            [
                'name' => 'Power Apps',
                'category' => 'Microsoft Power Platform',
                'proficiency' => 70,
            ],

            [
                'name' => 'Power Automate',
                'category' => 'Microsoft Power Platform',
                'proficiency' => 70,
            ],

            // Networking
            [
                'name' => 'IP Configuration',
                'category' => 'Networking',
                'proficiency' => 75,
            ],

            [
                'name' => 'Network Troubleshooting',
                'category' => 'Networking',
                'proficiency' => 70,
            ],

            [
                'name' => 'Domain & Computer Configuration',
                'category' => 'Networking',
                'proficiency' => 70,
            ],

            // Tools
            [
                'name' => 'Git & GitHub',
                'category' => 'Tools',
                'proficiency' => 80,
            ],

            [
                'name' => 'VS Code',
                'category' => 'Tools',
                'proficiency' => 90,
            ],
        ];

        foreach ($skills as $skill) {
            Skill::create([
                'name' => $skill['name'],
                'category' => $skill['category'],
                'proficiency' => $skill['proficiency'],
            ]);
        }


        /*
        |--------------------------------------------------------------------------
        | EXPERIENCE
        |--------------------------------------------------------------------------
        */

        /*
|--------------------------------------------------------------------------
| EXPERIENCE
|--------------------------------------------------------------------------
*/

Experience::create([
    'job_title' => 'Software Engineering & IT/Networking Intern',

    'company' => 'Ceylon Petroleum Corporation',

    'location' => 'Sri Lanka',

    'start_date' => '2026-07-01',

    'end_date' => '2026-12-31',

    'is_current' => true,

    'summary' =>
        'Gaining practical experience in software engineering, IT support, networking, business systems, and organizational IT operations.',

    'responsibilities' => json_encode([
        'Worked with software engineering and IT-related activities.',
        'Assisted with leave allocation and shift allocation activities using the MiHCM application.',
        'Performed IP configuration and basic network troubleshooting.',
        'Connected computers to the organizational domain.',
        'Installed and configured required software applications.',
        'Prepared Equipment Transfer Forms (ETRs).',
        'Participated in the Annual Stock Verification 2026 at the Material Department of the Refinery.',
    ]),

    'company_logo' => null,

    'sort_order' => 1,
]);


        /*
        |--------------------------------------------------------------------------
        | EDUCATION
        |--------------------------------------------------------------------------
        */

        Education::create([
            'institution' => 'London Metropolitan University',

            'qualification' => 'BEng (Hons) Software Engineering',

            'field_of_study' => 'Software Engineering',

            'start_date' => '2024-09-01',

            'end_date' => '2025-06-30',

            'grade' => 'Second Upper Class',

            'description' =>
                'Completed a Software Engineering top-up degree with a focus on software development, system design, databases, software engineering practices, and related technologies.',
        ]);


        Education::create([
            'institution' => 'Esoft Metro Campus',

            'qualification' => 'Pearson BTEC Level 5 HND in Computing',

            'field_of_study' => 'Computing',

            'start_date' => '2022-01-01',

            'end_date' => '2024-09-01',

            'grade' => null,

            'description' =>
                'Completed a two-year Higher National Diploma in Computing with practical and theoretical experience in software development and information technology.',
        ]);


        /*
        |--------------------------------------------------------------------------
        | PROJECTS
        |--------------------------------------------------------------------------
        */

        $ecommerceCategory = Category::where(
            'slug',
            'web-development'
        )->first();

        Project::create([
    'category_id' => Category::where(
        'slug',
        'web-development'
    )->first()?->id,

    'title' =>
        'Integrated E-Commerce Platform and Business Management System',

    'slug' =>
        'integrated-ecommerce-business-management-system',

    'short_description' =>
        'A multi-category e-commerce and business management platform designed for small-scale manufacturing and handicraft businesses.',

    'description' =>
        'A comprehensive software solution integrating e-commerce, inventory management, financial management, dashboards, order management, and business operations.',

    'featured_image' => null,

    'technologies' =>
        'PHP, Laravel, MySQL, Bootstrap, JavaScript, Power BI, Power Apps, Power Automate, Dataverse',

    'github_url' => null,

    'live_url' => null,

    'is_featured' => true,

    'is_published' => true,

    'project_date' => '2025-06-01',
]);


        Project::create([
    'category_id' => Category::where(
        'slug',
        'database-sql'
    )->first()?->id,

    'title' =>
        'CPC Inventory Management System',

    'slug' =>
        'cpc-inventory-management-system',

    'short_description' =>
        'A professional inventory management system designed to improve inventory operations and information management.',

    'description' =>
        'A web-based inventory management solution focused on product records, stock control, inventory transactions, reporting, and structured database management.',

    'featured_image' => null,

    'technologies' =>
        'PHP, Laravel, MySQL, Bootstrap, JavaScript, Git, GitHub',

    'github_url' => null,

    'live_url' => null,

    'is_featured' => true,

    'is_published' => true,

    'project_date' => '2026-09-01',
]);


        /*
        |--------------------------------------------------------------------------
        | CERTIFICATIONS / PROFESSIONAL DEVELOPMENT
        |--------------------------------------------------------------------------
        */

        // Certifications
Certification::create([
    'name' => 'Microsoft Power Platform Fundamentals',
    'issuer' => 'Microsoft',
    'credential_id' => null,
    'credential_url' => null,
    'issue_date' => null,
    'expiry_date' => null,
    'certificate_file' => null,
    'certificate_image' => null,
    'is_active' => true,
]);
    }
}