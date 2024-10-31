<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $resume->name }} - Resume</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f2f2f2;
            color: #333;
            padding: 20px;
        }
        .resume-container {
            max-width: 1100px;
            margin: auto;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }
        .resume-sidebar {
            background-color: #387478;
            color: #fff;
            text-align: center;
            padding: 30px;
        }
        .profile-img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 15px;
            border: 4px solid #fff;
        }
        .resume-sidebar h1 {
            font-size: 1.8rem;
            font-weight: bold;
            margin: 15px 0;
        }
        .resume-sidebar p, .icon-text {
            font-size: 0.9rem;
            margin: 5px 0;
        }
        .icon-text i {
            margin-right: 8px;
        }
        .resume-content {
            padding: 40px;
            background-color: #fff;
        }
        .section-title {
            color: #387478;
            font-size: 1.3rem;
            margin-top: 20px;
            margin-bottom: 10px;
            border-bottom: 2px solid #387478;
            padding-bottom: 5px;
        }
        .section-content {
            margin-bottom: 20px;
        }
        .badge {
            font-size: 0.9rem;
            background-color: #387478;
            color: #fff;
            padding: 8px 10px;
            border-radius: 15px;
            margin: 3px;
        }
        .footer {
            text-align: center;
            padding: 10px;
            font-size: 0.8rem;
            color: #6c757d;
            margin-top: 20px;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .resume-container {
                display: block;
            }
            .resume-sidebar, .resume-content {
                width: 100%;
                padding: 20px;
                border-radius: 0;
            }
            .resume-sidebar {
                border-bottom: 2px solid #387478;
            }
            .profile-img {
                width: 100px;
                height: 100px;
            }
        }
    </style>
</head>
<body>

<div class="resume-container d-flex flex-wrap">
    <!-- Sidebar with Personal Information -->
    <aside class="resume-sidebar col-12 col-md-4">
        @if($resume->image)
            <img src="{{ asset($resume->image) }}" alt="{{ $resume->name }}" class="profile-img">
        @endif
        <h1>{{ $resume->name }}</h1>
        <p class="icon-text"><i class="fas fa-map-marker-alt"></i>{{ $resume->address }}</p>
        <p class="icon-text"><i class="fas fa-phone"></i> {{ $resume->phone }}</p>
        <p class="icon-text"><i class="fas fa-envelope"></i> {{ $resume->email }}</p>
        <p class="icon-text"><i class="fab fa-facebook"></i> {{ $resume->Facebook ?? 'Not Provided' }}</p>
        <p class="icon-text"><i class="fab fa-instagram"></i> {{ $resume->Instagram ?? 'Not Provided' }}</p>
        <p class="icon-text"><i class="fas fa-birthday-cake"></i> {{ $resume->Birthday ?? 'Not Provided' }}</p>
    </aside>

    <!-- Main Content -->
    <div class="resume-content col-12 col-md-8">
        <!-- Objective Section -->
        <section class="section-content">
            <h2 class="section-title"><i class="fas fa-bullseye"></i> Objective</h2>
            <p>{{ $resume->objective ?? 'To apply my skills in a growth-oriented environment and contribute to innovative projects.' }}</p>
        </section>

        <!-- Education Section -->
        <section class="section-content">
            <h2 class="section-title"><i class="fas fa-graduation-cap"></i> Education</h2>
            @foreach ($resume->education as $education)
                <p><strong>{{ $education->degree }}</strong>, {{ $education->institution }} ({{ $education->start_date }} - {{ $education->end_date }})</p>
            @endforeach
        </section>

        <!-- Skills Section -->
        <section class="section-content">
            <h2 class="section-title"><i class="fas fa-tools"></i> Skills</h2>
            @foreach ($resume->skills as $skill)
                <span class="badge">{{ $skill->skill_name }}</span>
            @endforeach
        </section>

        <!-- Certifications Section -->
        <section class="section-content">
            <h2 class="section-title"><i class="fas fa-certificate"></i> Certifications</h2>
            @foreach ($resume->certifications as $certification)
                <p><strong>{{ $certification->title }}</strong> - {{ $certification->organization }} ({{ $certification->date_obtained }})</p>
            @endforeach
        </section>

        <!-- Languages Section -->
        <section class="section-content">
            <h2 class="section-title"><i class="fas fa-language"></i> Languages</h2>
            @foreach ($resume->languages as $language)
                <span class="badge" style="background-color: #28a745;">{{ $language->language }} - {{ $language->proficiency }}</span>
            @endforeach
        </section>

        <!-- Achievements Section -->
        <section class="section-content">
            <h2 class="section-title"><i class="fas fa-trophy"></i> Achievements</h2>
            <ul>
                @foreach ($resume->achievement as $achievement)
                    <li>{{ $achievement->achievements_title }}</li>
                @endforeach
            </ul>
        </section>
    </div>
</div>

<footer class="footer">
    <p>&copy; {{ now()->year }} {{ $resume->name }}. All rights reserved.</p>
</footer>

</body>
</html>
