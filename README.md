# LaraMarket API
**Developer:** Ahmed Alsaytari  
**Project Status:** 🏗️ Phase 2: Database & Schema (Working on `develop`)

A professional Marketplace REST API designed to demonstrate modern backend engineering practices. This project follows a deliberate evolution from manual logic to official Laravel ecosystem standards using a **GitFlow** branching strategy.

## 🎯 Project Goal
To build a high-performance "Micro-Market" backend where users can safely list, browse, and manage products with real-world security, strict validation, and optimized data structures.

## 🚀 Key Laravel Skills Demonstrated
| Category | Skills & Technologies |
| :--- | :--- |
| **Core Framework** | Laravel 12, PHP 8.4, Service Container, Dependency Injection |
| **API Architecture** | RESTful Design, API Resources (Data Transformation) |
| **Security** | Manual Sanctum Implementation, Laravel Breeze, Policies, Form Requests |
| **Database** | Eloquent ORM, Advanced Relationships, Factories & Seeders |
| **Testing & Docs** | Pest PHP (Feature Testing), Scribe (Auto-Documentation) |

---

## 🏗 Professional Roadmap (GitFlow Strategy)

This project utilizes a `main` branch for stable milestones, a `develop` branch for integration, and `feat/` branches for individual tasks.

| # | Status | Branch | Type | Commit Message | Key Deliverable | Merge Target |
| :--- | :---: | :--- | :--- | :--- | :--- | :--- |
| 1 | ✅ | `main` | `feat` | `initial laravel installation` | Env and Sanctum setup. | -- |
| 2 | ✅ | `main` | `docs` | `setup roadmap and readme` | Project vision & Git plan. | -- |
| 3 | ⏳ | `feat/migrations` | `feat` | `migrations for categories/products` | Table structures & FKs. | `develop` |
| 4 | ⏳ | `feat/models` | `feat` | `models relationships & factories` | Linking tables & fake data. | **`main`** |
| 5 | ⏳ | `feat/auth-manual` | `feat` | `manual sanctum register/login` | Custom Auth logic. | `develop` |
| 6 | ⏳ | `feat/validation` | `feat` | `StoreProductRequest validation` | Server-side validation. | `develop` |
| 7 | ⏳ | `feat/policies` | `feat` | `ProductPolicy ownership logic` | Authorization layer. | `develop` |
| 8 | ⏳ | `feat/crud` | `feat` | `ProductController CRUD` | Core Marketplace logic. | **`main`** |
| 9 | ⏳ | `feat/resources` | `feat` | `ProductResource transformation` | Clean JSON formatting. | `develop` |
| 10| ⏳ | `feat/testing` | `test` | `feature tests for auth & crud` | Quality assurance (Pest). | `develop` |
| 11| ⏳ | `refactor/breeze`| `refactor`| `replace manual auth with breeze` | Modernization. | `develop` |
| 12| ⏳ | `docs/scribe` | `docs` | `generate api docs with scribe` | Final Documentation. | **`main`** |

