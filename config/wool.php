<?php

/*
|--------------------------------------------------------------------------
| Wool & Weave Fashions Ltd. — website content
|--------------------------------------------------------------------------
| Source: "Wool & Weave Corporate Profile 2027" and
| "Wool & Weave Luxury Website Architecture 2027".
|
| Every page of the corporate website is described here so text, images and
| ordering can be updated without touching the templates. Images are Unsplash
| photo ids (the part after "photo-") or a local path such as
| "welcome/images/wool/factory.jpg" once real photography is available.
|
| After editing on a server that caches config, run: php artisan config:clear
*/

return [

    'company' => [
        'name'    => 'Wool & Weave Fashions Ltd.',
        'tagline' => 'Engineering the Future of Fashion',
        'motto'   => 'Innovate • Deliver • Scale Responsibly',
        'address' => '465, Road 8, DOHS Baridhara, Dhaka, Bangladesh',
        'email'   => 'rak@wnwfashionltd.com',
        'web'     => 'woolnweavefashion.com',
        'countries' => ['Bangladesh', 'India', 'China', 'Indonesia', 'Vietnam'],
    ],

    // Header navigation: [label, page key or url, children]
    'nav' => [
        ['Home', 'home'],
        ['About Us', 'company', [
            ['Company', 'company'],
            ['Leadership', 'leadership'],
            ['Manufacturing Network', 'manufacturing'],
        ]],
        ['Our Expertise', 'brand-services', [
            ['Brand Growth Services', 'brand-services'],
            ['Logistics & Warehousing', 'logistics'],
            ['Buyer Portal', 'buyer-portal'],
        ]],
        ['Products', 'collection', [
            ['Global Collection 2027', 'collection'],
            ['Sustainable Fabric Library', 'fabric-library'],
            ['Product Catalogue', 'products'],
        ]],
        ['Sustainability', 'sustainability', [
            ['Sustainability / ESG', 'sustainability'],
            ['Digital Product Passport', 'product-passport'],
        ]],
        ['Innovation', 'innovation-lab', [
            ['Innovation Lab', 'innovation-lab'],
            ['Patent & IP Vault', 'patents'],
        ]],
        ['Supply Chain', 'supply-chain'],
        ['Media', 'media'],
        ['Careers', 'careers'],
        ['Contact', 'contact'],
    ],

    'pages' => [

        /* ------------------------------------------------------------ 02 */
        'company' => [
            'number'   => '02',
            'eyebrow'  => 'About Us',
            'title'    => 'Company',
            'subtitle' => 'From fibre to market. One intelligent platform.',
            'hero'     => '1445205170230-053b83016050',
            'lead'     => 'Wool & Weave Fashions Ltd. is a multinational textile, apparel and supply-chain platform integrating product development, sourcing, manufacturing, quality, sustainability, traceability, logistics, warehousing and commercial execution.',
            'pillars'  => ['Global Platform', '5 Countries', 'One Interface'],
            'sections' => [
                ['type' => 'modules', 'eyebrow' => 'Who we are', 'title' => 'A concise institutional story', 'items' => [
                    ['Company story', 'One platform that connects product development, sourcing, manufacturing and commercial execution, built for global retailers, growing brands, institutions and strategic partners.', '1600880292203-757bb62b4baf'],
                    ['Vision and mission', 'Engineering the future of fashion through technology, sustainability, innovation, supply-chain intelligence and global excellence. Our mission: innovate, deliver and scale responsibly.', '1584184924103-e310d9dc82fc'],
                    ['Operating model', 'One coordinated platform reduces fragmentation between design, materials, factories, quality, compliance, logistics and product data.', '1494412574643-ff11b0a5c1c3'],
                    ['Global footprint', 'Our ecosystem spans Bangladesh, India, China, Indonesia and Vietnam, serving customers and partners worldwide.', '1578575437130-527eed3abbec'],
                ]],
                ['type' => 'countries', 'eyebrow' => 'Global footprint', 'title' => 'One ecosystem, five countries', 'items' => [
                    ['Bangladesh', 'Head office in Dhaka and the centre of our sourcing, development and commercial operations.'],
                    ['India', 'Part of our multi-country sourcing and manufacturing ecosystem.'],
                    ['China', 'Part of our multi-country sourcing and manufacturing ecosystem.'],
                    ['Indonesia', 'Part of our multi-country sourcing and manufacturing ecosystem.'],
                    ['Vietnam', 'Part of our multi-country sourcing and manufacturing ecosystem.'],
                ]],
                ['type' => 'checklist', 'eyebrow' => 'Why Wool & Weave', 'title' => 'A broader operating model for global brands',
                    'text'  => 'Differentiation is built around a clear set of commitments that run from first idea to final delivery.',
                    'steps' => ['Innovate', 'Source', 'Make', 'Deliver'],
                    'items' => ['Innovation before quotation', 'Multi-country resilience', 'Speed-to-fashion', 'Quality by design', 'Responsible manufacturing', 'Traceability readiness', 'A brand-building mindset'],
                ],
            ],
        ],

        /* ------------------------------------------------------------ 03 */
        'leadership' => [
            'number'   => '03',
            'eyebrow'  => 'About Us',
            'title'    => 'Leadership',
            'subtitle' => 'Experience, accountability and entrepreneurial execution.',
            'hero'     => '1556761175-b413da4baf72',
            'lead'     => 'Our leadership team combines textile, apparel, finance and commercial experience with a shared commitment to good governance, clear strategy and disciplined execution.',
            'pillars'  => ['Governance', 'Strategy', 'Execution'],
            'sections' => [
                ['type' => 'leaders', 'eyebrow' => 'Leadership team', 'title' => 'The people behind the platform', 'items' => [
                    ['Dr. Raashid Ashraf Khan', 'Group CEO & Board Director'],
                    ['MD. Kamrul Islam', 'Founder Executive Chairman'],
                    ['Nurul Alam', 'Managing Director'],
                    ['MD. Sikander Ali', 'Finance Director'],
                    ['Musfeq Salehin', 'Chief Operating Officer'],
                    ['Tasyeea Meraz', 'Manager, Marketing & Merchandising'],
                ]],
                ['type' => 'modules', 'eyebrow' => 'Governance philosophy', 'title' => 'How we lead', 'items' => [
                    ['Governance', 'Clear accountability, transparent decision-making and verified information for customers, partners and investors.', '1600880292203-757bb62b4baf'],
                    ['Strategy', 'A multi-country platform designed for resilience, innovation and long-term partnerships with global brands.', '1494412574643-ff11b0a5c1c3'],
                    ['Execution', 'Entrepreneurial delivery across development, sourcing, manufacturing, quality and logistics.', '1612423284934-2850a4ea6b0f'],
                ]],
            ],
        ],

        /* ------------------------------------------------------------ 04 */
        'supply-chain' => [
            'number'   => '04',
            'eyebrow'  => 'Supply Chain',
            'title'    => 'Global Supply Chain Management',
            'subtitle' => 'Control-tower thinking across the value chain.',
            'hero'     => '1494412574643-ff11b0a5c1c3',
            'lead'     => 'A control-tower view of capacity, quality, risk, delivery and data. Programs are matched to capability, geography, cost, lead time and risk.',
            'pillars'  => ['Demand', 'Material', 'Capacity', 'Quality', 'Logistics'],
            'sections' => [
                ['type' => 'flow', 'eyebrow' => 'End-to-end', 'title' => 'From demand to replenishment', 'steps' => [
                    'Demand planning', 'Product & material sourcing', 'Factory / capacity allocation', 'Critical-path management',
                    'Testing & quality', 'Compliance evidence', 'Logistics & warehousing', 'Replenishment & continuity planning',
                ]],
                ['type' => 'countries', 'eyebrow' => 'Sourcing countries', 'title' => 'A multi-country network', 'items' => [
                    ['Bangladesh', 'Head office, development and the core of our apparel manufacturing platform.'],
                    ['India', 'Sourcing and manufacturing partners matched to category capability.'],
                    ['China', 'Sourcing and manufacturing partners matched to category capability.'],
                    ['Indonesia', 'Sourcing and manufacturing partners matched to category capability.'],
                    ['Vietnam', 'Sourcing and manufacturing partners matched to category capability.'],
                ]],
            ],
        ],

        /* ------------------------------------------------------------ 05 */
        'innovation-lab' => [
            'number'   => '05',
            'eyebrow'  => 'Innovation',
            'title'    => 'Innovation Lab',
            'subtitle' => 'A practical innovation engine from material to finished product.',
            'hero'     => '1581091226825-a6a2a5aee158',
            'lead'     => 'R&D covers fibre and yarn exploration, knit and woven fabric development, colour, print and surface design, garment engineering, washing and finishing, testing, CAD, 3D visualisation and commercial scale-up.',
            'pillars'  => ['Material', 'Lab', 'Sample', '3D / CAD', 'Scale'],
            'sections' => [
                ['type' => 'modules', 'eyebrow' => 'R&D capability', 'title' => 'From problem definition to commercialisation', 'items' => [
                    ['Fibre / yarn innovation', 'Exploration of fibres and yarns, including preferred, recycled and cellulosic options.', '1584992236310-6edddc08acff'],
                    ['Fabric engineering', 'Knit and woven fabric development, fabric scanning and digitisation, miniature loom development.', '1604176354204-9268737828e4'],
                    ['Garment development', 'Garment engineering, CAD, 3D garment visualisation and sample cutting, sewing and finishing.', '1584184924103-e310d9dc82fc'],
                    ['Chemistry, printing & finishing', 'Colour, print and surface design, digital print, washing and finishing, physical and chemical testing.', '1532187863486-abf9dbad1b69'],
                ]],
                ['type' => 'stats', 'items' => [
                    ['~100', 'Samples per day', 'Planned sampling capability'],
                    ['50+', 'Concepts per month', 'Strategic ambition'],
                    ['10', 'Funnel stages', 'From discovery to learning'],
                ]],
                ['type' => 'flow', 'eyebrow' => '50+ concepts to scale', 'title' => 'A disciplined monthly innovation funnel',
                    'text'  => 'Concepts across fibres, yarns, fabrics, garments, processes, finishes, embellishments, packaging and digital solutions. Commercial conversion, not idea count, is the core measure.',
                    'steps' => ['Discover', 'Frame', 'Create', 'Screen', 'Prototype', 'Test', 'Buyer validate', 'Pilot', 'Scale', 'Learn'],
                ],
            ],
        ],

        /* ------------------------------------------------------------ 06 */
        'patents' => [
            'number'   => '06',
            'eyebrow'  => 'Innovation',
            'title'    => 'Patent & IP Vault',
            'subtitle' => 'Verified applications, granted patents and proprietary technologies.',
            'hero'     => '1611117775350-ac3950990985',
            'lead'     => 'A controlled public showcase. Each record is published only after verification, with its jurisdiction, application or grant number, status, filing date and a public summary.',
            'pillars'  => ['Applications', 'Granted', 'Proprietary', 'Licensing'],
            'sections' => [
                ['type' => 'modules', 'eyebrow' => 'The vault', 'title' => 'Intellectual property', 'items' => [
                    ['Patent applications', 'Verified applications will be listed here with jurisdiction, number and filing date.', '1520004434532-668416a08753', 'Updating'],
                    ['Granted patents', 'Granted patents will be published here once verified.', '1617050318658-a9a3175e34cb', 'Updating'],
                    ['Proprietary processes', 'Public summaries of proprietary processes developed in our innovation lab.', '1532187863486-abf9dbad1b69', 'Updating'],
                    ['Licensing / co-development', 'Open to licensing and co-development with brands and technology partners.', '1600880292203-757bb62b4baf', 'Enquire'],
                ]],
            ],
            'cta' => ['Discuss licensing or co-development', 'Talk to our innovation team about an existing technology or a new development.', 'Start a conversation', 'contact?type=innovation'],
        ],

        /* ------------------------------------------------------------ 07 */
        'collection' => [
            'number'   => '07',
            'eyebrow'  => 'Products',
            'title'    => 'Global Collection 2027',
            'subtitle' => 'A living Global Collection.',
            'hero'     => '1612423284934-2850a4ea6b0f',
            'lead'     => 'Core families include Tees, Polos, Sweatshirts, Sweaters, Woven Shirts, Denim Pants, Non-Denim Pants and Woven/Knit Nightwear, alongside womenswear, kidswear, uniforms, home textiles and technical/performance textiles.',
            'pillars'  => ['Menswear', 'Womenswear', 'Kidswear', 'Uniforms'],
            'sections' => [
                ['type' => 'families', 'eyebrow' => 'Core families', 'title' => 'Engineered for scale and differentiation', 'items' => [
                    ['Tees • Polos • Sweatshirts • Sweaters', 'Jersey, pique, interlock, rib, fleece and sweater constructions across cotton, preferred cotton, recycled and cellulosic blends; fashion and core fits; solids, prints, embroidery, garment washes and performance finishes.', '1620799140408-edc6dcb6d633', ['Men', 'Women', 'Kids', 'Active', 'Institutional']],
                    ['Woven Shirts', "Men's and women's shirts in poplin, oxford, twill, dobby, linen and cellulosic blends; solids, yarn-dyes, checks, stripes and prints; washed and non-washed finishes.", '1602810318383-e386cc2a3ccf', ['Formal', 'Smart-casual', 'Resort', 'Utility', 'Overshirt']],
                    ['Denim & Non-Denim Pants', 'Denim of approximately 6–13 oz/yd² with stretch options, light-to-dark indigo, black denim, clean and vintage washes, whiskers, abrasion and laser effects. Non-denim chinos, cargos, utility and tailored-casual bottoms.', '1604176354204-9268737828e4', ['Denim', 'Twill', 'Canvas', 'Chinos', 'Cargos']],
                    ['Nightwear — Woven & Knit', 'Lapel shirts, pajama bottoms, shorts, lounge sets and comfort separates in viscose/polyester, poplins, viscose-rich wovens, jersey and interlock.', '1505693416388-ac5ce068fe85', ['Women', 'Men', 'Kids', 'Lounge']],
                ]],
                ['type' => 'worlds', 'eyebrow' => 'Product worlds', 'title' => 'A buyer-facing digital showroom', 'items' => [
                    ['Menswear', '1617137968427-85924c800a22'],
                    ['Womenswear', '1539109136881-3be0616acf4b'],
                    ['Kidswear', '1503944583220-79d8926ad5e2'],
                    ['Uniforms / Institutional', '1507679799987-c73779587ccf'],
                    ['Home Textiles', '1522771739844-6a9f6d5f14af'],
                    ['Technical / Performance', '1518611012118-696072aa579a'],
                ]],
            ],
            'cta' => ['Request the full catalogue', 'Get detailed specifications, colourways and development options for your next season.', 'Request catalogue', 'contact?type=product'],
        ],

        /* ------------------------------------------------------------ 08 */
        'fabric-library' => [
            'number'   => '08',
            'eyebrow'  => 'Products',
            'title'    => 'Sustainable Fabric Library',
            'subtitle' => 'Composition, construction, GSM, finish, MOQ and lead time.',
            'hero'     => '1558769132-cb1aea458c5e',
            'lead'     => 'A searchable material library across natural fibres, regenerated cellulosics, recycled materials and performance textiles. Detailed GSM, MOQ and lead time are confirmed per program.',
            'pillars'  => ['Natural', 'Cellulosic', 'Recycled', 'Performance'],
            'sections' => [
                // [construction, type, composition, typical use, category]
                ['type' => 'fabrics', 'eyebrow' => 'Material library', 'title' => 'Find a fabric', 'items' => [
                    ['Single jersey', 'Knit', 'Cotton / preferred cotton', 'Tees, nightwear', 'Natural fibres'],
                    ['Pique', 'Knit', 'Cotton / preferred cotton', 'Polos', 'Natural fibres'],
                    ['Interlock', 'Knit', 'Cotton, cellulosic blends', 'Tees, nightwear', 'Regenerated cellulosics'],
                    ['Rib', 'Knit', 'Cotton blends', 'Trims, fitted tops', 'Natural fibres'],
                    ['Fleece', 'Knit', 'Cotton / recycled polyester blends', 'Sweatshirts, hoodies', 'Recycled materials'],
                    ['Sweater knit', 'Knit', 'Cotton, recycled and cellulosic blends', 'Sweaters, pullovers', 'Recycled materials'],
                    ['Poplin', 'Woven', 'Cotton, viscose/polyester', 'Shirts, nightwear', 'Natural fibres'],
                    ['Oxford', 'Woven', 'Cotton', 'Shirts', 'Natural fibres'],
                    ['Twill', 'Woven', 'Cotton, stretch blends', 'Shirts, chinos', 'Natural fibres'],
                    ['Dobby', 'Woven', 'Cotton', 'Shirts', 'Natural fibres'],
                    ['Linen & linen blends', 'Woven', 'Linen, cellulosic blends', 'Resort shirts', 'Natural fibres'],
                    ['Viscose-rich woven', 'Woven', 'Viscose', 'Shirts, nightwear', 'Regenerated cellulosics'],
                    ['Denim 6–13 oz/yd²', 'Woven', 'Cotton, stretch options', 'Jeans', 'Natural fibres'],
                    ['Canvas', 'Woven', 'Cotton', 'Utility bottoms', 'Natural fibres'],
                    ['Performance-finished knit', 'Knit', 'Engineered blends', 'Activewear', 'Performance textiles'],
                ]],
            ],
            'cta' => ['Request swatches', 'Tell us the construction, composition and quantity you need and we will confirm GSM, MOQ and lead time.', 'Request swatches', 'contact?type=product'],
        ],

        /* ------------------------------------------------------------ 09 */
        'manufacturing' => [
            'number'   => '09',
            'eyebrow'  => 'About Us',
            'title'    => 'Manufacturing Network',
            'subtitle' => 'Scale through specialist manufacturing partnerships.',
            'hero'     => '1558769132-cb1aea458c5e',
            'lead'     => 'Wool & Weave works through strategic partner factories and JV relationships, matching product categories with specialist capability while applying common expectations for development, quality, delivery, sustainability, compliance evidence and customer communication.',
            'pillars'  => ['JV', 'Partners', 'Governance'],
            'sections' => [
                ['type' => 'split', 'eyebrow' => 'Apparel manufacturing platform', 'title' => 'Rio Design & Fashion Ltd. and partner factories',
                    'text'  => 'The apparel platform is structured around woven and knit tops and bottoms, supported by cutting and finishing capability.',
                    'image' => '1612423284934-2850a4ea6b0f',
                    'stats' => [['~60', 'Sewing lines (planned)'], ['~3,000', 'Machines (planned)']],
                    'steps' => ['Cut', 'Sew', 'Finish', 'Assure'],
                ],
                ['type' => 'modules', 'eyebrow' => 'Capability-led', 'title' => 'How the network is managed', 'items' => [
                    ['Capability mapping', 'Each category is matched to the partner with the right specialist capability.', '1584184924103-e310d9dc82fc'],
                    ['Capacity', 'Capacity is allocated by capability, geography, cost, lead time and risk.', '1558769132-cb1aea458c5e'],
                    ['Quality systems', 'Common quality expectations across every partner factory and JV.', '1581093588401-fbb62a02f120'],
                    ['Compliance evidence', 'Compliance evidence collected and maintained for each facility and program.', '1520004434532-668416a08753'],
                ]],
                ['type' => 'flow', 'eyebrow' => 'Quality management', 'title' => 'Quality by design, not inspection alone',
                    'text'  => 'Specification review, material risk assessment, laboratory testing, fit and construction validation, pre-production controls and sealed approvals build the foundation. Bulk controls follow through to final inspection, root-cause analysis and CAPA.',
                    'steps' => ['Specify', 'Prevent', 'Inspect', 'CAPA'],
                ],
            ],
        ],

        /* ------------------------------------------------------------ 10 */
        'sustainability' => [
            'number'   => '10',
            'eyebrow'  => 'Sustainability',
            'title'    => 'Sustainability / ESG',
            'subtitle' => 'Responsibility integrated into product and process decisions.',
            'hero'     => '1448375240586-882707db888b',
            'lead'     => 'Preferred and recycled materials, circular-design principles, chemical management, water stewardship, energy efficiency, renewable-energy pathways, waste reduction, responsible manufacturing, packaging optimisation and progressively stronger product and factory data.',
            'pillars'  => ['Material', 'Water', 'Energy', 'Waste', 'Circular'],
            'sections' => [
                ['type' => 'modules', 'eyebrow' => 'Capability areas', 'title' => 'Evidence-led sustainability', 'items' => [
                    ['Materials', 'Preferred and recycled materials, chosen with circular design in mind.', '1584992236310-6edddc08acff'],
                    ['Water & energy', 'Water stewardship, energy efficiency and renewable-energy pathways.', '1509391366360-2e959784a276'],
                    ['Chemistry', 'Responsible chemical management across dyeing, printing, washing and finishing.', '1532187863486-abf9dbad1b69'],
                    ['Waste & circularity', 'Waste reduction, packaging optimisation and circular-product thinking.', '1532996122724-e3c354a0b15b'],
                ]],
                ['type' => 'note', 'text' => 'Our sustainability claims are specific, evidence-led and relevant to the facility or program they describe. Verified data is published here as it becomes available.'],
            ],
        ],

        /* ------------------------------------------------------------ 11 */
        'product-passport' => [
            'number'   => '11',
            'eyebrow'  => 'Sustainability',
            'title'    => 'Digital Product Passport',
            'subtitle' => 'Building product identity from source to consumer.',
            'hero'     => '1595079676601-f1adf5be5dee',
            'lead'     => 'Traceability is designed around product identity, fibre and material composition, supplier and processing information, origin, testing and compliance evidence, care, longevity and circularity information. The data architecture is intended to be DPP-ready as textile requirements evolve.',
            'pillars'  => ['Source', 'Process', 'Product ID', 'QR / DPP'],
            'sections' => [
                ['type' => 'modules', 'eyebrow' => 'What a passport holds', 'title' => 'From source to consumer', 'items' => [
                    ['Composition & origin', 'Fibre and material composition and where it comes from.', '1584992236310-6edddc08acff'],
                    ['Processing history', 'Supplier and processing information with testing and compliance evidence.', '1558769132-cb1aea458c5e'],
                    ['Care & longevity', 'Guidance that helps every garment last longer.', '1620799140408-edc6dcb6d633'],
                    ['Circularity information', 'Information for repair, resale and recycling at end of use.', '1532996122724-e3c354a0b15b'],
                ]],
                ['type' => 'trace'],
            ],
        ],

        /* ------------------------------------------------------------ 12 */
        'logistics' => [
            'number'   => '12',
            'eyebrow'  => 'Our Expertise',
            'title'    => 'Logistics & Warehousing',
            'subtitle' => 'Consolidation, freight, warehousing and replenishment.',
            'hero'     => '1578575437130-527eed3abbec',
            'lead'     => 'A global delivery architecture that carries every program from factory to market, with continuity planning built in.',
            'pillars'  => ['Consolidate', 'Ship', 'Store', 'Replenish'],
            'sections' => [
                ['type' => 'modules', 'eyebrow' => 'Delivery architecture', 'title' => 'From factory to market', 'items' => [
                    ['Consolidation', 'Multi-factory and multi-country consolidation for efficient shipments.', '1601584115197-04ecc0da31d7'],
                    ['Shipping', 'Freight planning and execution matched to lead time and cost.', '1578575437130-527eed3abbec'],
                    ['Warehousing', 'Warehousing that supports flexible, on-time delivery.', '1553413077-190dd305871c'],
                    ['Replenishment', 'Replenishment and continuity planning for core programs.', '1494412574643-ff11b0a5c1c3'],
                ]],
            ],
        ],

        /* ------------------------------------------------------------ 13 */
        'brand-services' => [
            'number'   => '13',
            'eyebrow'  => 'Our Expertise',
            'title'    => 'Brand Growth Services',
            'subtitle' => 'Product, sourcing, manufacturing, logistics and commercial support for growing brands.',
            'hero'     => '1600880292203-757bb62b4baf',
            'lead'     => 'For growing brands we bring the full platform together: range strategy, product development, supply chain and structured commercial support, with a brand-building mindset.',
            'pillars'  => ['Range', 'Develop', 'Supply', 'Commercial'],
            'sections' => [
                ['type' => 'modules', 'eyebrow' => 'Services', 'title' => 'What we do for growing brands', 'items' => [
                    ['Range strategy', 'Building a focused range around your customer, season and price architecture.', '1612423284934-2850a4ea6b0f'],
                    ['Product development', 'Innovation before quotation, from material to finished sample.', '1584184924103-e310d9dc82fc'],
                    ['Supply chain', 'Sourcing, manufacturing, quality and logistics in one coordinated platform.', '1494412574643-ff11b0a5c1c3'],
                    ['Commercial facilitation', 'Structured commercial execution that helps your brand scale.', '1600880292203-757bb62b4baf'],
                ]],
            ],
            'cta' => ['Grow your brand with us', 'Share your brief and we will shape a range, a supply plan and a launch path.', 'Upload a product brief', 'contact?type=product'],
        ],

        /* ------------------------------------------------------------ 14 */
        'media' => [
            'number'   => '14',
            'eyebrow'  => 'Media',
            'title'    => 'Media & Insights',
            'subtitle' => 'Innovation stories, collection drops, factory and lab films, and industry insights.',
            'hero'     => '1586339949916-3e9457bef6d3',
            'sections' => [
                ['type' => 'posts', 'eyebrow' => 'Latest', 'title' => 'Stories from Wool & Weave', 'tags' => ['Innovation stories', 'Collection drops', 'Factory / lab films', 'Industry insights']],
            ],
        ],

        /* ------------------------------------------------------------ 15 */
        'careers' => [
            'number'   => '15',
            'eyebrow'  => 'Careers',
            'title'    => 'Careers',
            'subtitle' => 'Build the next generation of textile and apparel supply chains.',
            'hero'     => '1522071820081-009f0129c71c',
            'lead'     => 'We are building teams across merchandising, R&D, sustainability, technology and supply chain. Join a platform where innovation, responsibility and execution meet.',
            'pillars'  => ['Merchandising', 'R&D', 'Sustainability', 'Technology', 'Supply Chain'],
            'sections' => [
                ['type' => 'modules', 'eyebrow' => 'Join us', 'title' => 'Ways to build your career', 'items' => [
                    ['Experienced talent', 'Bring your expertise in merchandising, sourcing, quality or operations.', '1600880292203-757bb62b4baf'],
                    ['Graduate talent', 'Start your career inside a multi-country textile and apparel platform.', '1531545514256-b1400bc00f31'],
                    ['Innovation careers', 'Work on fibres, fabrics, garments, processes and digital product data.', '1581091226825-a6a2a5aee158'],
                    ['Open roles', 'No roles are listed right now. Send us your CV and the area you are interested in.', '1522071820081-009f0129c71c'],
                ]],
            ],
            'cta' => ['Send us your CV', 'Tell us about yourself and the team you would like to join.', 'Apply now', 'contact?type=careers'],
        ],

        /* ------------------------------------------------------------ 16 */
        'investors' => [
            'number'   => '16',
            'eyebrow'  => 'Investors',
            'title'    => 'Investor Platform',
            'subtitle' => 'A scalable ecosystem, an expansion roadmap and verified performance.',
            'hero'     => '1494412574643-ff11b0a5c1c3',
            'lead'     => 'Wool & Weave is built as a scalable textile, apparel and supply-chain platform across five countries, combining manufacturing partnerships, an innovation engine and a digital product data architecture.',
            'pillars'  => ['Platform', 'Growth', 'Technology', 'Governance'],
            'sections' => [
                ['type' => 'modules', 'eyebrow' => 'Overview', 'title' => 'The investment case', 'items' => [
                    ['Platform model', 'One coordinated platform from fibre to market across Bangladesh, India, China, Indonesia and Vietnam.', '1494412574643-ff11b0a5c1c3'],
                    ['Growth engine', 'A disciplined innovation funnel and a living Global Collection for retailers, brands and institutions.', '1612423284934-2850a4ea6b0f'],
                    ['Technology', 'CAD, 3D visualisation, fabric digitisation and DPP-ready traceability architecture.', '1611117775350-ac3950990985'],
                    ['Governance & data room', 'Verified performance information is shared with qualified investors on request.', '1520004434532-668416a08753'],
                ]],
            ],
            'cta' => ['Request data room access', 'Qualified investors can request the investor presentation and verified performance data.', 'Request access', 'contact?type=investor'],
        ],

        /* ------------------------------------------------------------ 17 */
        'contact' => [
            'number'   => '17',
            'eyebrow'  => 'Contact',
            'title'    => 'Start a Project',
            'subtitle' => "Let's build the next generation of textile and apparel supply chains.",
            'hero'     => '1600880292203-757bb62b4baf',
            'sections' => [
                ['type' => 'form'],
            ],
            'cta' => false,
        ],

        /* ------------------------------------------------------------ 18 */
        'buyer-portal' => [
            'number'   => '18',
            'eyebrow'  => 'Our Expertise',
            'title'    => 'Buyer Portal',
            'subtitle' => 'A secure workspace for developments, T&A, quality, documents and DPP records.',
            'hero'     => '1553413077-190dd305871c',
            'lead'     => 'The Buyer Portal is being prepared as an authenticated workspace for our customers. Request early access and we will contact you when it opens.',
            'pillars'  => ['Developments', 'T&A', 'Quality', 'Documents'],
            'sections' => [
                ['type' => 'modules', 'eyebrow' => 'Coming soon', 'title' => 'Inside the portal', 'items' => [
                    ['Development library', 'Every development, sample and approval in one place.', '1584184924103-e310d9dc82fc', 'Coming soon'],
                    ['T&A dashboard', 'Time-and-action tracking for every order.', '1601584115197-04ecc0da31d7', 'Coming soon'],
                    ['Quality records', 'Testing, inspection and CAPA records for your programs.', '1581093588401-fbb62a02f120', 'Coming soon'],
                    ['Secure documents', 'Specifications, compliance evidence and DPP records.', '1520004434532-668416a08753', 'Coming soon'],
                ]],
            ],
            'cta' => ['Request early access', 'Tell us about your company and programs and we will set up your portal access.', 'Request access', 'contact?type=buyer'],
        ],
    ],

    // Enquiry types for the Start a Project form
    'enquiry_types' => [
        'product'    => 'Product brief',
        'supply'     => 'Supply-chain enquiry',
        'innovation' => 'Innovation collaboration',
        'partner'    => 'Partnership enquiry',
        'investor'   => 'Investor enquiry',
        'buyer'      => 'Buyer Portal access',
        'careers'    => 'Careers',
    ],
];
