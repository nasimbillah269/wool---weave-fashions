<?php

/*
|--------------------------------------------------------------------------
| Wool & Weave Fashion Ltd. — website content
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
        'name'    => 'Wool & Weave Fashion Ltd.',
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
            'subtitle' => 'A legacy of trust, innovation, sustainability and global ambition since 2014',
            'hero'     => '1445205170230-053b83016050',
            'lead'     => 'Established in 2014, Wool & Weave Fashion Ltd. began its journey with a vision to create a globally respected textile and apparel sourcing enterprise built on quality, integrity, innovation, ethical practices and sustainable development.',
            'pillars'  => ['Since 2014', 'Trust', 'Innovation', 'Sustainability', 'Global ambition'],
            'sections' => [
                ['type' => 'prose', 'eyebrow' => 'Since 2014', 'title' => 'Our History', 'image' => '1600880292203-757bb62b4baf', 'paragraphs' => [
                    'The company was founded by Mr. Md. Kamrul Islam, Founder Chairman, and Mr. Nurul Alam, Managing Director. Together, they laid the company’s foundations and developed its relationships with international apparel and textile brands, importers, retailers and manufacturing partners.',
                    'Over the years, Wool & Weave has evolved from a sourcing and merchandising organisation into a diversified, technology-driven supply-chain management and product development enterprise connecting manufacturing capabilities with global market opportunities.',
                    'In 2026, Dr. Raashid Ashraf Khan assumed leadership as Group Chief Executive Officer and Board Director, with a strategic focus on international expansion, research and development, sustainable manufacturing, digital transformation and multinational supply-chain integration.',
                ]],
                ['type' => 'table', 'cream' => true, 'eyebrow' => 'Our journey', 'title' => 'Leadership Milestones',
                    'columns' => ['Year', 'Milestone'],
                    'rows'    => [
                        ['2014', 'Founded by Mr. Md. Kamrul Islam (Founder Chairman) and Mr. Nurul Alam (Managing Director).'],
                        ['2026', 'Dr. Raashid Ashraf Khan becomes Group CEO and Board Director, advancing the global growth strategy.'],
                    ],
                ],
                ['type' => 'prose', 'eyebrow' => 'Who we are', 'title' => 'About Us', 'image' => '1578575437130-527eed3abbec', 'paragraphs' => [
                    'Wool & Weave Fashion Ltd. is an international textile and apparel sourcing, research and development, marketing and supply-chain management organisation committed to innovative, reliable, competitive and sustainable solutions worldwide.',
                    'We connect apparel and textile brands, retailers, importers, wholesalers, dealers and consumers with responsible sourcing and manufacturing ecosystems. Our expertise spans fibres, yarns, fabrics, garments and home textiles, supported by product development, quality assurance, logistics and international market development.',
                    'Our approach combines advanced technologies, market intelligence, responsible manufacturing practices and global sourcing expertise. Technology-enabled sustainability, ethical leadership, transparency, innovation and long-term partnerships guide our operations.',
                    'Through group companies and strategic partnerships, we aim to build a scalable global ecosystem integrating research, design, development, production, supply-chain solutions and worldwide distribution.',
                ]],
                ['type' => 'cards', 'cream' => true, 'cols' => 3, 'eyebrow' => 'What sets us apart', 'title' => 'Our Core Strengths', 'items' => [
                    ['Global Sourcing & Supply Chain', 'Integrated sourcing across fibres, yarns, fabrics, apparel and home textiles.', 'ti-world'],
                    ['Research, Development & Innovation', 'Fabric engineering, product design, sampling and digital development.', 'ti-flask'],
                    ['Sustainable & Ethical Practices', 'Responsible sourcing, environmental stewardship, fair labour practices and transparency.', 'ti-plant-2'],
                    ['Technology-Driven Operations', 'Digitalisation, traceability, data-driven decision-making and emerging technologies.', 'ti-cpu'],
                    ['International Business Development', 'Connecting global clients with competitive and dependable manufacturing partners.', 'ti-briefcase'],
                    ['Strategic Manufacturing Partnerships', 'Collaborative capabilities across group companies and partner factories.', 'ti-building-factory-2'],
                ]],
                ['type' => 'cards', 'cols' => 2, 'eyebrow' => 'Purpose', 'title' => 'Our Vision & Mission', 'items' => [
                    ['Our Vision', 'To become a globally recognised, technology-driven and sustainability-focused textile and apparel solutions group, engineering the future of fashion through innovation, ethical leadership and excellence in supply-chain management.', 'ti-eye'],
                    ['Our Mission', 'To empower international brands, retailers, importers, dealers and consumers through innovative product development, responsible sourcing, advanced technologies, transparent operations and efficient global supply-chain solutions—creating lasting economic, environmental and social value.', 'ti-target-arrow'],
                ]],
                ['type' => 'prose', 'cream' => true, 'eyebrow' => 'Looking ahead', 'title' => 'Our Commitment to the Future', 'paragraphs' => [
                    'We are committed to building a future-ready global business ecosystem that combines people, technology, sustainability, creativity and commercial excellence. Our ambition is not only to supply apparel and textiles, but to become a trusted partner in transforming how fashion is researched, developed, manufactured, sourced and delivered.',
                ]],
            ],
            'cta' => ['We Engineer the Future of Fashion', 'Tell us about your product, program or partnership and the right team will get back to you.', 'Start a Project', 'contact'],
        ],

        /* ------------------------------------------------------------ 03 */
        'leadership' => [
            'number'   => '03',
            'eyebrow'  => 'About Us',
            'title'    => 'Leadership',
            'subtitle' => 'Visionary stewardship • Global sourcing • Responsible growth',
            'hero'     => '1556761175-b413da4baf72',
            'lead'     => 'The leadership team of Wool & Weave Fashion Ltd. brings together founder-led continuity and functional oversight across international business, sourcing, manufacturing partnerships, operations, finance and merchandising.',
            'pillars'  => ['Visionary stewardship', 'Global sourcing', 'Responsible growth'],
            'sections' => [
                // [name, role, biography, leadership focus]
                ['type' => 'leaders', 'eyebrow' => 'Our leadership', 'title' => 'Executive Leadership', 'items' => [
                    ['Md. Kamrul Islam', 'Executive Chairman',
                        'A founding leader of Wool & Weave Fashion Ltd., established in 2014, Mr. Md. Kamrul Islam provides strategic stewardship and continuity of the company’s founding vision. As Executive Chairman, his role encompasses board-level direction, corporate governance, long-term partnerships and the alignment of group priorities with sustainable business growth.',
                        'Strategic direction, governance, investment oversight and enduring stakeholder relationships.'],
                    ['Dr. Raashid Ashraf Khan', 'Group Chief Executive Officer & Board Director',
                        'Dr. Raashid Ashraf Khan assumed leadership as Group CEO and Board Director in 2026. He leads the company’s global expansion agenda, integrating international marketing, product development, research and innovation, sourcing, manufacturing partnerships and supply-chain solutions. His mandate places particular emphasis on sustainability-led growth, advanced technology and the development of an internationally connected fibre-to-apparel ecosystem.',
                        'International business development, multinational sourcing, R&D, digital transformation and sustainable scale.'],
                    ['Md. Nurul Alam', 'Managing Director',
                        'Mr. Md. Nurul Alam helped establish Wool & Weave Fashion Ltd. in 2014 alongside the Founder Chairman. As Managing Director, he supports the company’s enterprise management, commercial execution and development of long-term relationships with buyers, supply partners and other stakeholders. His position bridges the founders’ original business mission with the company’s next phase of organisational growth.',
                        'Business stewardship, cross-functional coordination, commercial execution and partner engagement.'],
                ]],
                ['type' => 'leaders', 'eyebrow' => 'Our leadership', 'title' => 'Functional Leadership', 'items' => [
                    ['Sikander Ali', 'Finance Director',
                        'As Finance Director, Mr. Sikander Ali provides leadership for financial oversight and management disciplines across the business. His remit is presented around financial planning, budgeting, management reporting, working capital discipline and the financial evaluation of investments and operating decisions in a multi-market supply-chain environment.',
                        'Financial controls, cash-flow planning, budgeting, risk visibility and management reporting.'],
                    ['Khondoker Musfeq Salehin', 'Chief Operating Officer (COO)',
                        'Mr. Khondoker Musfeq Salehin leads operational coordination with a focus on translating buyer requirements into reliable merchandising and delivery performance. The COO function connects sourcing, product development, factory execution, quality management and day-to-day commercial follow-through, supporting the company’s commitment to dependable and responsible operations.',
                        'Merchandising oversight, execution discipline, factory coordination, delivery performance and service quality.'],
                    ['Tasyeea Meraz', 'Manager, Marketing & Merchandising',
                        'Ms. Tasyeea Meraz supports buyer engagement and the merchandising lifecycle, from product enquiries and development follow-up through costing coordination, sample management, order communication and production milestones. Her role links customer expectations with cross-functional teams and manufacturing partners, helping maintain clear communication and consistent execution.',
                        'Buyer communication, product development follow-up, order coordination and merchandising performance.'],
                ]],
                ['type' => 'checklist', 'eyebrow' => 'Leadership philosophy', 'title' => 'Our Leadership Philosophy',
                    'text'  => 'At Wool & Weave Fashion Ltd., leadership is anchored in integrity, accountability, innovation and partnership. The team seeks to build an agile global supply-chain platform where ethical sourcing, product quality, commercial competitiveness and environmental responsibility reinforce one another.',
                    'steps' => ['Integrity', 'Accountability', 'Innovation', 'Partnership'],
                    'items' => ['Ethical sourcing', 'Product quality', 'Commercial competitiveness', 'Environmental responsibility'],
                ],
                ['type' => 'note', 'text' => 'Together, the leadership team is focused on supporting international brands, retailers, importers and partners with connected solutions spanning fibres, yarns, fabrics, apparel, home textiles, technology and supply-chain services.'],
            ],
        ],

        /* ------------------------------------------------------------ 04 */
        'supply-chain' => [
            'number'   => '04',
            'eyebrow'  => 'Supply Chain',
            'title'    => 'Global Supply Chain Management',
            'subtitle' => 'A Hong Kong–Headquartered Network for Fibre-to-Fashion Excellence',
            'hero'     => '1494412574643-ff11b0a5c1c3',
            'lead'     => 'A coordinated, dependable route from raw materials to finished products for global brands, retailers, importers and distributors.',
            'pillars'  => ['Integrated sourcing', 'Responsible manufacturing', 'Quality assurance', 'Digital visibility'],
            'sections' => [
                ['type' => 'prose', 'eyebrow' => 'Vision', 'title' => 'Our Global Supply Chain Vision', 'paragraphs' => [
                    'Wool & Weave Fashion Ltd. is building an integrated international supply-chain ecosystem headquartered in Hong Kong, connecting specialist suppliers, technology providers and apparel manufacturing partners across major textile-producing regions. Our objective is to give global brands, retailers, importers and distributors a coordinated, dependable route from raw materials to finished products.',
                    'Our model combines commercial sourcing, product engineering, supplier development, sustainability governance, production management and international logistics. It is designed to balance quality, speed, technical performance, compliance and competitive cost while creating traceability throughout the value chain.',
                ]],
                ['type' => 'table', 'cream' => true, 'eyebrow' => 'One network', 'title' => 'A Single Coordinated Network',
                    'columns' => ['Area', 'How it works'],
                    'rows'    => [
                        ['Strategic coordination', 'Hong Kong headquarters for international commercial coordination, market connectivity and supply-chain governance.'],
                        ['Regional execution', 'Sourcing and manufacturing partnerships across South Asia, East Asia and other global production markets, selected by product and buyer requirements.'],
                        ['End-to-end offering', 'Fibre, yarn, fabric, machinery, dyes and chemicals, trims, garments, home textiles and delivery solutions.'],
                        ['Operating principle', 'Ethical business practices, risk management, technical verification and transparent communication with customers.'],
                    ],
                ],
                ['type' => 'prose', 'eyebrow' => 'Customers', 'title' => 'Who We Serve', 'paragraphs' => [
                    'International apparel and textile brands, retailers, buying offices, importers, wholesalers, dealers, specialty distributors and manufacturing enterprises seeking qualified suppliers and coordinated execution.',
                ]],
                ['type' => 'note', 'text' => 'The Hong Kong-led network described here is the company’s strategic operating model. Individual country offices, supplier relationships and certifications are independently confirmed before being named as established facilities or approved partners.'],

                ['type' => 'cards', 'cream' => true, 'cols' => 3, 'eyebrow' => '01', 'title' => 'Global Materials & Technology Sourcing', 'items' => [
                    ['Fibres and Raw Materials', 'Cotton, organic and recycled cotton, responsibly sourced cellulosic fibres, viscose, modal, lyocell, polyester, recycled polyester, nylon, elastane, linen, wool and functional blends. We focus on fibre specifications, origin documentation, performance, availability and responsible sourcing requirements.', 'ti-plant-2'],
                    ['Yarns and Spinning Solutions', 'Ring-spun, compact, open-end, air-jet, core-spun, mélange, dyed, textured and performance yarns for knitwear, woven apparel and home textiles. Supplier assessment includes count consistency, strength, evenness, contamination controls, traceable input claims and price-to-performance evaluation.', 'ti-needle-thread'],
                    ['Fabric Development and Procurement', 'Knitted and woven fabrics including jersey, interlock, pique, fleece, rib, poplin, twill, denim, canvas, sateen and technical constructions. Services encompass construction engineering, GSM and width optimisation, dyeing and finishing, lab dips, strike-offs, bulk approvals and performance testing.', 'ti-texture'],
                    ['Textile & Apparel Machinery', 'Technology sourcing for spinning, weaving, knitting, dyeing, printing, finishing, cutting, sewing, embroidery, automated material handling, laboratory testing and digital product development. Support can include specification benchmarking, supplier comparison, investment feasibility, installation coordination and operator-training pathways.', 'ti-settings-cog'],
                    ['Dyes, Chemicals & Process Inputs', 'Sourcing of dyestuffs, pigments, auxiliaries, enzymes, finishing chemicals, washing inputs and other processing materials through screened suppliers. Priority is given to chemical inventory transparency, restricted-substance management, ZDHC-aligned programmes where applicable, safe handling and process efficiency.', 'ti-flask'],
                ]],
                ['type' => 'checklist', 'eyebrow' => '01 · Sourcing', 'title' => 'Integrated Technical Discipline', 'items' => [
                    'Material specification sheets and approved reference standards',
                    'Supplier prequalification, sample evaluation and independent testing where required',
                    'Cost engineering, dual sourcing and continuity planning',
                    'Documented change control from development to bulk production',
                ]],

                ['type' => 'table', 'cream' => true, 'eyebrow' => '02', 'title' => 'Global Garment Manufacturing Network',
                    'text'    => 'Our factory network strategy brings together specialist garment producers for diverse product categories and order profiles, supported by unified technical, merchandising and quality-management standards. Factory allocation is based on proven capability, audit status, production capacity, lead time and the customer’s sourcing preferences.',
                    'columns' => ['Category', 'Products'],
                    'rows'    => [
                        ['Knit apparel', 'T-shirts, polos, sweatshirts, hoodies, activewear, intimates and casualwear.'],
                        ['Woven apparel', 'Shirts, trousers, dresses, skirts, jackets, uniforms and workwear.'],
                        ['Denim & non-denim', 'Jeans, chinos, garment-dyed products, washed finishes and fashion bottoms.'],
                        ['Home textiles', 'Towels, bedding, kitchen textiles and selected hospitality products.'],
                        ['Special projects', 'Technical garments, small-batch innovation programmes and value-added finishes.'],
                    ],
                ],
                ['type' => 'cards', 'cols' => 3, 'eyebrow' => '02 · Services', 'title' => 'Brand Growth & Supply Chain Services', 'items' => [
                    ['Product strategy', 'Market intelligence, range development, alternative material proposals and target-cost engineering.', 'ti-bulb'],
                    ['Sourcing', 'Factory discovery, capability assessment, negotiation, commercial documentation and capacity planning.', 'ti-search'],
                    ['Merchandising', 'Calendar management, proto-to-production sampling, fit approvals, BOM discipline and purchase-order control.', 'ti-calendar-time'],
                    ['Quality management', 'Risk-based inspections, laboratory testing, corrective actions, workmanship standards and shipment release criteria.', 'ti-rosette-discount-check'],
                    ['Logistics', 'Packing, freight coordination, export documentation, consolidation, shipment tracking and handover to nominated forwarders.', 'ti-truck-delivery'],
                ]],
                ['type' => 'cards', 'cream' => true, 'cols' => 2, 'eyebrow' => '02 · Governance', 'title' => 'Responsible Suppliers, Global Reach', 'items' => [
                    ['Responsible Supplier Selection', 'Suppliers are evaluated for legally compliant operations, worker health and safety, environmental management, wage and working-hour practices, product safety and customer-specific audit requirements. Audit reports or certificates are not treated as permanent guarantees; their scope, validity and site coverage must be checked before buyer representation.', 'ti-shield-check'],
                    ['Global Network Architecture', 'Hong Kong provides the strategic commercial hub; Bangladesh and other competitive textile and apparel producing markets can support manufacturing and material sourcing; additional partner countries may be engaged according to product expertise, capacity, proximity, preferential trade arrangements and risk diversification. Exact supplier and country coverage remains subject to approval and onboarding.', 'ti-world'],
                ]],

                ['type' => 'cards', 'cols' => 2, 'eyebrow' => '03', 'title' => 'Digital, Ethical & Resilient Operations', 'items' => [
                    ['Digital Supply Chain Visibility', 'Our technology roadmap includes an integrated buyer portal and supplier collaboration environment for sample status, purchase orders, critical-path milestones, production updates, quality records, shipping documentation and performance scorecards. The goal is a consistent information layer across multiple suppliers and geographies.', 'ti-device-desktop-analytics'],
                    ['Traceability from Fibre to Apparel', 'We aim to build structured, verifiable product records linking fibre origins and transaction evidence to yarn conversion, fabric manufacture, wet processing, cutting, sewing and final shipment. Future Digital Product Passport and blockchain-enabled solutions may strengthen data provenance and controlled information-sharing, subject to platform selection and third-party verification.', 'ti-route'],
                ]],
                ['type' => 'checklist', 'cream' => true, 'eyebrow' => '03 · ESG', 'title' => 'Sustainability & ESG by Design', 'items' => [
                    'Water: metering, process optimisation, responsible wet processing and wastewater-treatment verification.',
                    'Energy and carbon: equipment efficiency, energy-monitoring plans, lower-impact logistics and emissions accounting.',
                    'Circularity: fabric utilisation, cutting-waste segregation, recycled inputs, upcycling and post-consumer recovery partnerships.',
                    'Chemicals: restricted-substance screening, safer formulations, responsible storage and documentation.',
                    'People and governance: ethical recruitment, grievance systems, safe working conditions and supplier accountability.',
                ]],
                ['type' => 'prose', 'eyebrow' => '03 · Resilience', 'title' => 'Risk Management and Business Continuity', 'paragraphs' => [
                    'The network will use diversified supplier options, critical-material planning, production risk reviews, documented contingencies and escalation procedures. Key metrics include on-time delivery, first-pass quality, sample conversion, defect rates, supplier corrective-action closure, material traceability coverage and water/energy intensity where measurable.',
                ]],
                ['type' => 'prose', 'cream' => true, 'eyebrow' => 'Our promise', 'title' => 'Our Commitment', 'paragraphs' => [
                    'Wool & Weave Fashion Ltd. seeks to become a trusted international platform connecting innovation, sourcing, manufacturing and markets through disciplined execution and responsible partnerships. By integrating Hong Kong-led strategic coordination with global technical and manufacturing expertise, we aim to deliver scalable value across the fibre-to-apparel ecosystem.',
                ]],
            ],
            'cta' => ['We Engineer the Future of Fashion', 'Corporate contact: woolnweavefashion.com • rak.ceo@woolnweavefashion.com', 'Start a Project', 'contact'],
        ],

        /* ------------------------------------------------------------ 05 */
        'innovation-lab' => [
            'number'   => '05',
            'eyebrow'  => 'Innovation',
            'title'    => 'Innovation Lab',
            'subtitle' => 'Innovation Lab | Patent & IV Vault',
            'hero'     => '1581091226825-a6a2a5aee158',
            'lead'     => 'Building a research-led, digitally connected and responsible textile-to-apparel ecosystem.',
            'pillars'  => ['Innovation Lab', 'Patent & IV Vault', 'Innovation, IP & global supply chains'],
            'sections' => [
                ['type' => 'prose', 'eyebrow' => 'Philosophy', 'title' => 'Our innovation philosophy', 'image' => '1532187863486-abf9dbad1b69', 'paragraphs' => [
                    'At Wool & Weave Fashion Ltd., innovation is a commercial discipline that connects new materials, design intelligence, product engineering, responsible manufacturing and intellectual-asset protection. Drawing on the leadership team’s global textile and apparel management experience, we seek to translate buyer challenges into differentiated products that are technically feasible, commercially scalable and traceable across the value chain.',
                ]],
                ['type' => 'note', 'text' => 'This page describes our innovation direction and proposed operating framework. Dedicated facilities, patent filings, proprietary platforms and third-party certifications are described as operational or registered only when documentary evidence is available.'],

                ['type' => 'cards', 'cream' => true, 'cols' => 3, 'eyebrow' => '01 · Core pillars', 'title' => 'Innovation Lab',
                    'text'  => 'Our Innovation Lab is envisioned as a cross-functional development platform integrating fibres, yarns, fabrics, garment engineering, design, testing and digital technologies. Its purpose is to accelerate idea-to-sample cycles while reducing resource intensity and improving brand speed-to-market.',
                    'items' => [
                        ['Material innovation', 'Recycled and responsibly sourced fibres, lower-impact blends, bio-based and cellulosic options, performance yarns and mono-material concepts designed for circularity.', 'ti-plant-2'],
                        ['Fabric engineering', 'Knitted and woven structures, hand-feel and drape optimisation, functional finishes, colour management, durability and care-performance development.', 'ti-texture'],
                        ['Apparel development', 'Digital patternmaking, fit blocks, 3D simulation, construction engineering, value analysis, wash/finish trials and buyer-specific capsule collections.', 'ti-shirt'],
                        ['Responsible processing', 'Trials for reduced-water colouration, lower-temperature processes, chemistry screening, wastewater considerations and process-waste recovery.', 'ti-droplet-half-2'],
                        ['Data-led decisions', 'Digital material libraries, structured bills of materials, test reports, development histories and practical traceability requirements at each production stage.', 'ti-database'],
                    ],
                ],
                ['type' => 'table', 'eyebrow' => '01 · Innovation Lab', 'title' => 'From insight to scalable product',
                    'columns' => ['Stage', 'Indicative outputs'],
                    'rows'    => [
                        ['Discover', 'Brand briefs, consumer insight, opportunity map and sustainability requirements'],
                        ['Prototype', 'Material swatches, digital concepts, fit samples, lab recipes and feasibility checks'],
                        ['Validate', 'Performance testing, quality review, costing, compliance screening and life-cycle considerations'],
                        ['Pilot', 'Controlled trials at qualified partner facilities and buyer approvals'],
                        ['Scale', 'Technical packs, supplier onboarding, production controls and traceable documentation'],
                    ],
                ],
                ['type' => 'cards', 'cream' => true, 'cols' => 2, 'eyebrow' => '01 · Innovation Lab', 'title' => 'Priority programmes', 'items' => [
                    ['Sustainable material and circular design', 'Priority workstreams include recycled-content fabrics with validated chain-of-custody records; blended-material alternatives with improved recyclability; long-life performance products; engineered knit and woven basics; and design-for-disassembly approaches where commercially suitable. Claims about recycled content, carbon savings and fibre origin are independently substantiated.', 'ti-recycle'],
                    ['Digital product development', 'Our intended workflow combines CAD, 3D visualisation, virtual sampling, digital colour and fabric libraries and product-data governance. These tools can reduce redundant physical sampling when validated against real material and fit performance, while supporting faster customer review.', 'ti-device-desktop'],
                    ['Testing and buyer readiness', 'Each project has a defined test plan for applicable fabric and garment parameters such as dimensional stability, colourfastness, pilling, seam performance, strength and restricted-substance requirements. Final specifications are aligned to the relevant customer standards, market regulations and product end use.', 'ti-flask'],
                    ['Innovation partnerships', 'The lab model is designed for collaboration with fibre producers, textile mills, process-technology firms, universities, testing laboratories, apparel manufacturers and international brand development teams. Intellectual-property ownership, confidentiality and commercialisation terms are documented before collaborative trials begin.', 'ti-users-group'],
                ]],
                ['type' => 'table', 'eyebrow' => '01 · Innovation Lab', 'title' => 'Indicative lab scorecard',
                    'columns' => ['Measure', 'Recommended management approach'],
                    'rows'    => [
                        ['Development speed', 'Track lead time from brief to first sample and approval'],
                        ['Commercial relevance', 'Track buyer adoption, repeat programmes and gross-margin contribution'],
                        ['Product performance', 'Monitor first-time test pass rates and corrective actions'],
                        ['Resource efficiency', 'Measure water, energy and material-use changes against documented baselines'],
                        ['Innovation pipeline', 'Track concepts, prototypes, pilots, launches and protected assets'],
                    ],
                ],

                ['type' => 'cards', 'cream' => true, 'cols' => 3, 'eyebrow' => '02 · What the vault protects', 'title' => 'Patent & IV Vault',
                    'text'  => 'The Patent & IV Vault is proposed as a secure, permission-controlled system for identifying, documenting, protecting and commercialising Wool & Weave’s intellectual value (IV). It is designed to cover both potentially patentable inventions and valuable know-how that may be better preserved as confidential trade secrets.',
                    'items' => [
                        ['Patent candidates', 'Novel textile structures, process inventions, technical garment components and manufacturing solutions subject to novelty and patentability review.', 'ti-bulb'],
                        ['Design assets', 'Original prints, surface patterns, silhouettes, CAD files, collection concepts and other protectable design works.', 'ti-palette'],
                        ['Trade secrets', 'Manufacturing parameters, proprietary recipes, material combinations, sourcing methods, algorithms and internal cost/process models.', 'ti-lock'],
                        ['Documentation', 'Invention disclosures, dated laboratory notebooks, prototype versions, test evidence, approvals, inventor records, contracts and licence histories.', 'ti-file-certificate'],
                        ['Commercial knowledge', 'Validated technical packs, proprietary development libraries and controlled buyer-specific concepts, with appropriate access restrictions.', 'ti-briefcase'],
                    ],
                ],
                ['type' => 'table', 'eyebrow' => '02 · Patent & IV Vault', 'title' => 'Governance and legal safeguards',
                    'text'    => 'A structured disclosure-to-protection workflow begins before public presentations or buyer circulation. Every potential invention is assessed for ownership, prior art, novelty, inventorship, freedom-to-operate risks and commercial value with qualified IP counsel. Trademark, patent, design and trade-secret rights depend on jurisdiction and formal legal requirements; entry into the vault alone does not create a registered patent.',
                    'columns' => ['Control', 'Intended practice'],
                    'rows'    => [
                        ['Access and security', 'Role-based access, encryption, multi-factor authentication and audit trails'],
                        ['Evidence integrity', 'Timestamped version history, document hashes and controlled revision logs'],
                        ['Ownership', 'Employee/partner invention clauses, assignments and joint-development agreements'],
                        ['Protection decisions', 'Patent/design filing, confidential retention, publication or abandonment review'],
                        ['Commercialisation', 'Licence terms, royalty tracking, exclusivity, territory and renewal controls'],
                    ],
                ],
                ['type' => 'flow', 'eyebrow' => '02 · Patent & IV Vault', 'title' => 'IV Vault workflow',
                    'steps' => ['Idea submission', 'Confidential disclosure', 'Technical and legal screening', 'Protection strategy', 'Evidence preservation', 'Commercial pilot', 'Buyer / licensing review', 'Portfolio monitoring'],
                ],

                ['type' => 'checklist', 'eyebrow' => '03 · Buyer-facing value proposition', 'title' => 'Integrating innovation, IP and global supply chains',
                    'text'  => 'Innovation creates measurable value only when it reaches the right customers at the right quality, cost and speed. Wool & Weave’s intended operating model links Innovation Lab concepts to buyer-facing development teams, qualified global manufacturing partners, quality management and digital product records.',
                    'items' => [
                        'Differentiated seasonal collections tailored to the technical, aesthetic and commercial briefs of international apparel and textile brands.',
                        'Faster development decisions through structured digital sampling, test evidence and controlled design revisions.',
                        'Greater continuity across sourcing and manufacturing partners through common technical specifications and approval protocols.',
                        'More credible sustainability communications through documented baselines, traceable materials and third-party validation where applicable.',
                        'Clearer handling of original concepts through contractual confidentiality, access restrictions and appropriate IP protection.',
                    ],
                ],
                ['type' => 'table', 'cream' => true, 'eyebrow' => '03 · Roadmap', 'title' => 'Technology roadmap',
                    'columns' => ['Phase', 'Focus'],
                    'rows'    => [
                        ['Foundation', 'Create innovation governance, product-data taxonomy, confidential disclosure templates and project registers'],
                        ['Digitise', 'Introduce controlled digital libraries, electronic lab records, sample histories and role-based IV repository'],
                        ['Connect', 'Integrate supplier and buyer systems, chain-of-custody evidence and selected Digital Product Passport data fields'],
                        ['Advance', 'Evaluate blockchain-backed event integrity, AI-assisted material search and patent-portfolio analytics where justified'],
                    ],
                ],
                ['type' => 'prose', 'eyebrow' => 'Our position', 'title' => 'A responsible position on patenting and technology', 'paragraphs' => [
                    'Patentability is determined by relevant authorities after formal application and examination; we do not describe unfiled concepts as patented. Blockchain may strengthen shared audit trails but does not itself verify the truth of upstream data. Technical validation, trustworthy inputs and independent assurance remain essential.',
                ]],
                ['type' => 'prose', 'cream' => true, 'eyebrow' => 'Looking ahead', 'title' => 'Our commitment', 'paragraphs' => [
                    'Wool & Weave Fashion Ltd. seeks to create an innovation culture where creativity is documented, inventions are responsibly protected, sustainable performance is evidenced and successful concepts are scaled through an ethical global supply-chain ecosystem.',
                ]],
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
            'eyebrow'  => 'Global Manufacturing Network',
            'title'    => 'Manufacturing Network',
            'subtitle' => 'An Integrated Asian Manufacturing Ecosystem',
            'hero'     => '1558769132-cb1aea458c5e',
            'lead'     => 'Connecting worldwide apparel and textile brands to responsive production, investment, research and development, marketing, infrastructure, responsible manufacturing and integrated logistics support.',
            'pillars'  => ['Bangladesh', 'China', 'India', 'Vietnam', 'Indonesia'],
            'sections' => [
                ['type' => 'prose', 'eyebrow' => 'Vision', 'title' => 'Our Manufacturing Vision', 'image' => '1584184924103-e310d9dc82fc', 'paragraphs' => [
                    'Wool & Weave Fashion Ltd. is building a connected, multi-country manufacturing and supply-chain platform through joint ventures, strategic factory partnerships and specialist service providers. The approach is designed to offer international brands, retailers, importers and distributors an integrated route from product concept and material selection to compliant manufacturing and shipment.',
                    'The network strategy combines country-specific manufacturing strengths with centrally coordinated commercial management, product engineering, quality assurance, sustainability and logistics. Hong Kong is envisaged as an international coordination hub, supported by operating and manufacturing relationships in Asian sourcing markets.',
                ]],
                ['type' => 'table', 'cream' => true, 'flags' => true, 'eyebrow' => 'Five-country network', 'title' => 'Coverage & Specialisation',
                    'columns'  => ['Market', 'Indicative manufacturing focus', 'Network development role'],
                    'rows'     => [
                        ['Bangladesh', 'Knitwear, woven apparel, denim, towels, home textiles; fabric and trims sourcing', 'Core manufacturing partnerships, sampling, merchandising and export delivery'],
                        ['China', 'Specialty textiles, technical fabrics, trims, machinery, performance materials', 'Technology and material innovation, equipment sourcing and specialist production'],
                        ['India', 'Cotton-based textiles, yarns, woven fabrics, knits, embellishment and apparel', 'Fibre-to-fabric access, specialised processing and regional capacity diversification'],
                        ['Vietnam', 'Sportswear, performance apparel, outerwear and technical sewing', 'Performance-product capacity and alternative manufacturing geography'],
                        ['Indonesia', 'Knitted and woven fabrics, activewear, denim and textile processing', 'Fabric and apparel supply-base diversification and integrated production'],
                    ],
                    'footnote' => 'Country specialisations describe proposed sourcing coverage and widely recognised sector capabilities; they do not represent a verified list of Wool & Weave-owned or contracted factories in each country.',
                ],
                ['type' => 'cards', 'cols' => 4, 'eyebrow' => 'How we partner', 'title' => 'Partnership and Investment Model', 'items' => [
                    ['Manufacturing joint ventures', 'Clearly defined factory and marketing/supply-chain responsibilities, with commercial terms agreed per project.', 'ti-building-factory-2'],
                    ['Capital and infrastructure support', 'Feasibility-led investments in capacity, technology, machinery, testing, utilities and productivity.', 'ti-building-bank'],
                    ['Flexible order allocation', 'Capacity, lead-time, buyer requirements, duty treatment, material origin and compliance determine factory selection.', 'ti-arrows-split-2'],
                    ['Transparent governance', 'Supplier due diligence, documented costing, service-level agreements, quality gates and financial controls.', 'ti-shield-check'],
                ]],
                ['type' => 'cards', 'cream' => true, 'cols' => 3, 'eyebrow' => 'End-to-end support', 'title' => 'Integrated Services Across the Network', 'items' => [
                    ['Manufacturing & Capacity Development', 'Our network concept supports product-specific factory onboarding, feasibility studies, line planning, capacity reservation, industrial engineering, lean productivity improvements and manufacturing readiness. Product categories span men’s, women’s and children’s apparel, woven and knitted tops and bottoms, denim, activewear, uniforms and selected home-textile lines.', 'ti-building-factory'],
                    ['Research, Development & Technical Innovation', 'Product teams can link trend forecasting and buyer briefs to concept design, sustainable material selection, fabric engineering, 3D prototyping, physical samples, fit assessment, wash and finishing trials, testing and industrialisation. Proposed innovation investments include digital sampling, colour-management systems, fabric digitisation, and process optimisation for material yield and lower resource consumption.', 'ti-flask'],
                    ['Global Brand Marketing & Merchandising', 'International business teams are intended to provide a single account-management interface across factory locations, including range development, target costing, collection presentations, calendar management, order execution, buyer communication and after-shipment services. Multi-country allocation can improve sourcing flexibility without diluting brand-specific quality or documentation requirements.', 'ti-world'],
                    ['Infrastructure & Technology Enablement', 'Factory development may include equipment upgrades, CAD/CAM integration, digital planning and inspection, laboratory capabilities, wastewater and energy-management infrastructure, worker welfare improvements, renewable-energy assessments and automated reporting. Investment decisions should follow project-level business cases and verified baseline conditions.', 'ti-cpu'],
                    ['Quality, Compliance & Sustainability', 'Each factory partnership is intended to operate against an agreed buyer compliance matrix, independently verifiable certificates or audits where applicable, approved product specifications, in-line and final inspections, material traceability and corrective-action workflows. Responsible sourcing priorities include workplace safety, legal employment, chemical management, water and energy efficiency, greenhouse-gas measurement, waste segregation, recycling and product circularity.', 'ti-certificate'],
                    ['Logistics, Customs & Delivery', 'Integrated logistics coverage is designed around raw-material procurement, inbound transport, consolidation, export documentation, freight coordination, shipment visibility and delivery performance. Origin rules, trade controls, transit routes and buyer incoterms must be reviewed country by country before commitments are made.', 'ti-truck-delivery'],
                ]],
                ['type' => 'flow', 'cream' => false, 'eyebrow' => 'Workflow', 'title' => 'Fibre-to-Finished-Garment Workflow',
                    'steps' => ['Buyer brief', 'Feasibility & capacity mapping', 'Fibre / yarn / fabric sourcing', 'Design & sampling', 'Testing and approval', 'Factory allocation', 'Material booking', 'Production and inspections', 'Export documentation', 'Freight and delivery', 'Performance review'],
                ],
                ['type' => 'cards', 'cream' => true, 'flags' => true, 'cols' => 3, 'eyebrow' => 'Country by country', 'title' => 'Country-Level Network Strategy', 'items' => [
                    ['Bangladesh', 'Leverage existing Bangladesh manufacturing relationships and potential JV structures to coordinate knit, woven, denim and towel programmes. Priorities include technical sampling, factory quality systems, process efficiency, wastewater management, merchandising and time-and-action control.', null, 'Core Apparel and Home-Textile Manufacturing'],
                    ['China', 'Develop approved supply relationships for advanced functional fabrics, engineered components, printing and finishing technologies, textile machinery, automation and difficult-to-source trims. All supplier claims require qualification and product-level verification.', null, 'Technology, Machinery and Specialty Materials'],
                    ['India', 'Explore vertically integrated textile partners for cotton and cellulosic fibres, spinning, weaving, knitting, speciality fabric processing and apparel products. This route can support differentiated fabrics and regional supply resilience.', null, 'Fibre, Yarn and Integrated Textile Development'],
                    ['Vietnam', 'Qualify manufacturing partners in performance apparel, technical outerwear and other higher-complexity garments, balancing production capability with commercial feasibility and buyer approval requirements.', null, 'Technical Apparel and Responsive Manufacturing'],
                    ['Indonesia', 'Develop opportunities in textile mills, knitting, weaving, finishing and apparel manufacturing, including casualwear, denim and performance-led categories, subject to technical, social and environmental due diligence.', null, 'Fabric-to-Garment and Performance Manufacturing'],
                ]],
                ['type' => 'table', 'eyebrow' => 'Who does what', 'title' => 'Operating Framework for Joint Ventures and Partners',
                    'columns'  => ['Workstream', 'Wool & Weave / group coordination', 'Factory / JV partner'],
                    'rows'     => [
                        ['Marketing & accounts', 'Buyer development, briefs, pricing coordination and relationships', 'Technical feasibility and factory input'],
                        ['R&D & product', 'Innovation roadmap, development coordination and approvals', 'Sampling, process trials and industrialisation'],
                        ['Production', 'Milestones, quality oversight and consolidated reporting', 'Labour, machinery, capacity, manufacturing and delivery'],
                        ['Compliance & ESG', 'Standards, audit review and improvement plans', 'Legal compliance, workplace and environmental controls'],
                        ['Investment', 'Project assessment and agreed financial participation', 'Facility investment and local execution as contracted'],
                        ['Logistics', 'Shipment planning, documentation coordination', 'Packing, export handover and factory records'],
                    ],
                    'footnote' => 'The allocation above is an illustrative operating model; ownership, investment responsibilities and profit sharing are determined by signed agreements, not by this profile.',
                ],
                ['type' => 'table', 'cream' => true, 'eyebrow' => 'Responsible manufacturing', 'title' => 'Responsible Manufacturing & Traceable Supply Chains',
                    'text'     => 'Wool & Weave seeks to embed measurable sustainability outcomes into supplier selection and ongoing factory development. ESG expectations should be translated into factory-level targets, audited evidence, corrective-action ownership and regular buyer-facing reporting.',
                    'columns'  => ['Priority', 'Practical improvement initiatives', 'Suggested tracking indicators'],
                    'rows'     => [
                        ['Water', 'Low-liquor processing, metering, reuse feasibility, preventive maintenance', 'Litres/kg processed; recycling percentage'],
                        ['Energy & carbon', 'Sub-metering, heat recovery, efficient motors, renewable-power evaluation', 'kWh/unit; emissions intensity'],
                        ['Chemicals', 'Chemical inventories, restricted-substance controls, wastewater oversight', 'MRSL/RSL status; test and audit results'],
                        ['Circularity', 'Marker optimisation, cutting-waste sorting, fibre recovery, packaging reduction', 'Material utilisation; waste diverted'],
                        ['People & ethics', 'Grievance systems, safety, legal working conditions and training', 'Corrective actions closed; training coverage'],
                        ['Traceability', 'Lot IDs and documented transactions from fibre to finished goods', 'Documented chain-of-custody coverage'],
                    ],
                ],
                ['type' => 'prose', 'eyebrow' => 'Digital traceability', 'title' => 'Digital Traceability and Future Blockchain Integration', 'paragraphs' => [
                    'The proposed digital architecture is designed to connect material declarations, lot and batch data, suppliers, transformation stages, factory certificates, inspection outcomes, shipment events and buyer-facing product records.',
                    'A phased blockchain pilot may be considered after reliable underlying data, supplier permissions and governance are established. Digital Product Passport interoperability would depend on applicable market rules and buyer specifications.',
                ]],
                ['type' => 'checklist', 'cream' => true, 'eyebrow' => 'Why brands work with us', 'title' => 'Brand Value Proposition', 'items' => [
                    'One coordinated sourcing interface across multiple Asian production markets.',
                    'Broader access to specialised factories, materials and manufacturing technologies.',
                    'Flexible capacity planning and risk diversification for global sourcing programmes.',
                    'Integrated development, compliance, commercial execution and logistics.',
                    'Sustainability performance built into sourcing decisions and continuous improvement.',
                ]],
                ['type' => 'table', 'eyebrow' => 'Roadmap', 'title' => 'Phased Expansion Roadmap',
                    'columns'  => ['Phase', 'Focus', 'Decision gate'],
                    'rows'     => [
                        ['I — Validate', 'Map factory base; verify legal entities, audits, capacities, contacts and agreements', 'Approved, documented partner register'],
                        ['II — Pilot', 'Select product programmes and launch cross-border sourcing/production pilots', 'Buyer approval, delivery and quality performance'],
                        ['III — Integrate', 'Standardise reporting, R&D workflow, logistics and ESG scorecards', 'Repeat orders and commercially sustainable operations'],
                        ['IV — Scale', 'Consider targeted JV investment and multi-country programme expansion', 'Board-approved capital plan and proven returns'],
                    ],
                ],
                ['type' => 'note', 'text' => 'This is a strategic corporate capability and network-development profile. Specific factory ownership, JV status, country entities, capacities, audit results and certifications will be added once supported by signed agreements and current documentary evidence.'],
            ],
        ],

        /* ------------------------------------------------------------ 10 */
        'sustainability' => [
            'number'   => '10',
            'eyebrow'  => 'Sustainability',
            'title'    => 'Sustainability / ESG',
            'subtitle' => 'ESG • Circular Textiles • Digital Product Passports • Fibre-to-Apparel Traceability',
            'hero'     => '1448375240586-882707db888b',
            'lead'     => 'Our commitment: combining responsible sourcing, efficient resource use and ethical supply-chain governance with measurable, technology-enabled transparency.',
            'pillars'  => ['ESG', 'Circular textiles', 'Digital Product Passports', 'Fibre-to-apparel traceability'],
            'sections' => [
                ['type' => 'prose', 'eyebrow' => 'Philosophy', 'title' => 'Our Sustainability Philosophy', 'image' => '1584992236310-6edddc08acff', 'paragraphs' => [
                    'Wool & Weave Fashion Ltd. aims to create a responsible global textile and apparel ecosystem where environmental performance, social responsibility and commercial excellence reinforce one another. Across our sourcing and manufacturing-partner network, we seek to embed sustainability considerations from fibre selection and fabric engineering to garment production, distribution, product care, reuse and end-of-life recovery.',
                    'Our strategy couples practical factory-level improvements with digital data integrity. We prioritise verifiable evidence, supplier engagement and continuous improvement—not unsupported claims of zero impact or universal compliance. The actions below are our corporate approach and implementation priorities; individual facility performance and certifications require site-specific evidence.',
                ]],

                ['type' => 'cards', 'cream' => true, 'cols' => 3, 'eyebrow' => '01 · Environmental stewardship', 'title' => 'Sustainability and ESG', 'items' => [
                    ['Responsible fibres and materials', 'Evaluate recycled cotton/polyester, certified organic cotton where validated, responsibly sourced cellulosics and lower-impact blends using chain-of-custody evidence and fitness-for-purpose testing.', 'ti-plant-2'],
                    ['Water stewardship', 'Map water-intensive wet processing; promote low-liquor-ratio dyeing, counter-current rinsing, automatic dosing, leak detection, metering, wastewater treatment and, where technically feasible, treated-water reuse.', 'ti-droplet'],
                    ['Energy and climate', 'Build baselines for electricity, steam, natural gas and fuels; encourage heat recovery, boiler maintenance, insulation, efficient motors/VFDs, LED lighting, process optimisation and appropriately evaluated renewable electricity.', 'ti-bolt'],
                    ['Chemical responsibility', 'Prioritise input chemical inventory, supplier declarations, restricted-substance controls, worker training, wastewater monitoring and progress toward ZDHC-aligned practices, with verified testing where required.', 'ti-flask'],
                    ['Circularity', 'Design for durability, repairability, disassembly and recyclability; reduce offcuts and defective outputs before recycling; establish material-sorted waste streams with documented recovery partners.', 'ti-recycle'],
                ]],
                ['type' => 'checklist', 'eyebrow' => '01 · Sustainability and ESG', 'title' => 'Social responsibility and ethical sourcing', 'items' => [
                    'Respect for human rights, lawful wages and working hours, occupational health and safety, freedom of association and prohibition of forced and child labour.',
                    'Risk-based factory onboarding, corrective-action follow-up, independent audit evidence where applicable, grievance channels and remediation with documented closure.',
                    'Supplier capacity building in safe production, gender equity, workplace dignity and ethical business practices.',
                ]],
                ['type' => 'prose', 'cream' => true, 'eyebrow' => '01 · Sustainability and ESG', 'title' => 'Governance and accountability', 'paragraphs' => [
                    'We aim to operate with clear supplier codes of conduct, anti-bribery controls, document retention, responsible purchasing practices, grievance escalation and oversight of ESG risks. ESG claims are supported by facility records, transaction documentation or independent verification, as appropriate.',
                ]],

                ['type' => 'table', 'eyebrow' => '02', 'title' => 'Digital Product Passport (DPP)',
                    'text'     => 'Our vision is to make each product’s essential origin, composition, sourcing, production and circularity information accessible through a unique digital identity, such as a QR-linked product record. A buyer-facing passport can connect the product to material specifications, verified transaction and certification records, manufacturing stages, care instructions and end-of-life guidance.',
                    'columns'  => ['Data layer', 'Proposed passport contents'],
                    'rows'     => [
                        ['Product identity', 'SKU/style, batch or lot, QR identifier, product category, supplier and manufacturing country'],
                        ['Materials', 'Fibre composition, recycled content claims with supporting evidence, yarn/fabric lots and material suppliers'],
                        ['Processing', 'Spinning, knitting/weaving, wet processing, cutting, sewing, finishing and shipment events'],
                        ['Assurance', 'Test reports, audit and certificate references, chain-of-custody records, document validity'],
                        ['Circularity', 'Care, repair, durability, recyclability and take-back or recovery instructions where applicable'],
                    ],
                    'footnote' => 'The EU Digital Product Passport framework is being introduced progressively under the Ecodesign for Sustainable Products Regulation (ESPR). Textile-specific fields and legal implementation details are checked against the applicable delegated acts before formal compliance is stated.',
                ],
                ['type' => 'table', 'cream' => true, 'eyebrow' => '03', 'title' => 'Transition to Blockchain-Enabled Traceability',
                    'text'    => 'Wool & Weave’s technology roadmap envisages a phased shift from structured digital records to permissioned blockchain-enabled traceability across the fibre-to-apparel value chain. Blockchain can strengthen the audit trail of recorded events, but cannot by itself prove that physical goods match a claim; verification, chain-of-custody controls and data governance remain essential.',
                    'columns' => ['Phase', 'Implementation roadmap', 'Output'],
                    'rows'    => [
                        ['1 — Data foundations', 'Supplier mapping; product IDs; fibre-to-finished-garment event taxonomy; baseline ERP/portal integration', 'Traceable digital product records'],
                        ['2 — Evidence capture', 'Lot-linked purchase orders, invoices, test results, certificates, material transfers and mass-balance/reconciliation checks', 'Validated chain-of-custody data'],
                        ['3 — Buyer-facing DPP pilot', 'QR-linked passports for selected styles; role-based access; consumer/public and buyer/private fields', 'Product-level transparency pilot'],
                        ['4 — Blockchain pilot', 'Permissioned shared event ledger, digital signatures, audit logs, exception handling and third-party validation', 'Tamper-evident traceability architecture'],
                        ['5 — Scale and assurance', 'Expand by buyer, category and supplier; integrate recycling partners and life-cycle data', 'Scalable multi-country traceability program'],
                    ],
                ],

                ['type' => 'checklist', 'eyebrow' => '04 · At the manufacturing and sourcing-partner level', 'title' => 'Reducing Water and Energy Consumption', 'items' => [
                    'Establish process-level metering for litres of water per kg of finished textile, kWh per kg, thermal energy per kg, and effluent quality; normalise data by process and product mix.',
                    'Set improvement plans for dyeing, washing, finishing, steam generation and cooling; use pilot studies and verified before/after data before reporting savings.',
                    'Prefer high-efficiency equipment at procurement, optimise batch planning and machine loading, minimise reprocessing and control fabric right-first-time quality.',
                    'Evaluate rainwater harvesting, water recycling and solar/renewable energy subject to site feasibility, local regulation and technical quality requirements.',
                ]],
                ['type' => 'cards', 'cream' => true, 'cols' => 2, 'eyebrow' => '05', 'title' => 'Recycling, Upcycling and Waste Elimination', 'items' => [
                    ['Pre-consumer / process waste', 'Our circularity program prioritises avoiding waste at design, marker and cutting stages; segregating cotton, polyester, blended fabric, yarn, selvedge and packaging residues; and documenting routes to reuse, mechanical recycling, fibre recovery or responsibly managed disposal. Clean cutting offcuts can be converted into recycled yarn, accessories, patchwork, stuffing or secondary products where material quality permits.', 'ti-scissors'],
                    ['Post-industrial and post-consumer waste', 'For finished-goods returns, unsold stock and used clothing, we seek partnerships for resale, repair, remanufacture, donation where appropriate, take-back and material recovery. Fibre-to-fibre recycling requires composition identification and sorting; blended materials may need specialised recycling technologies. Circular outcomes are reported using actual weights, destinations and recycler evidence, not merely collection volumes.', 'ti-recycle'],
                ]],
                ['type' => 'flow', 'cream' => false, 'eyebrow' => '05 · Recycling, upcycling and waste elimination', 'title' => 'Waste hierarchy',
                    'steps' => ['Prevent', 'Reduce', 'Reuse / Repair', 'Upcycle', 'Recycle', 'Responsible final treatment'],
                ],
                ['type' => 'table', 'cream' => true, 'eyebrow' => '06', 'title' => 'ESG Performance Dashboard — Proposed Measures',
                    'columns'  => ['Dimension', 'Indicative KPI', 'Evidence / cadence'],
                    'rows'     => [
                        ['Water', 'm³/kg textile; recycled-water share; wastewater test compliance', 'Meter readings, lab reports / monthly'],
                        ['Energy & climate', 'kWh/kg; thermal energy/kg; Scope 1, 2 and material Scope 3 emissions', 'Utility bills, fuel logs, emission factors / quarterly'],
                        ['Circularity', 'kg waste/kg production; diversion by verified route; recycled input %', 'Waste manifests, material bills / monthly'],
                        ['People', 'Audits/CAPAs closed; safety training; grievances resolved', 'HR, audit and EHS records / quarterly'],
                        ['Traceability', '% styles with lot-level mapping; % verified claims; DPP coverage', 'Portal logs, invoices, certificates / quarterly'],
                    ],
                    'footnote' => 'Baseline year, numerical reduction targets, ownership and assurance scope will be approved once reliable site-level data are collected. No quantitative reductions or certifications are claimed without supporting records.',
                ],

                ['type' => 'prose', 'eyebrow' => 'Looking ahead', 'title' => 'Our Global Commitment', 'paragraphs' => [
                    'Wool & Weave Fashion Ltd. seeks to help brands, importers and manufacturing partners make better products with more responsible use of resources, credible social safeguards and accessible supply-chain evidence. Our long-term ambition is a digitally connected, circular and ethically managed global supply network—with product-level transparency from fibre to apparel and onward to responsible recovery.',
                ]],
                ['type' => 'links', 'cream' => true, 'eyebrow' => 'Further reading', 'title' => 'Reference Frameworks', 'items' => [
                    ['European Commission — Digital Product Passport / ESPR', 'https://single-market-economy.ec.europa.eu/single-market/digital-product-passport_en'],
                    ['European Commission — Revised Waste Framework Directive (2025)', 'https://environment.ec.europa.eu/news/revised-waste-framework-directive-enters-force-2025-10-16_en'],
                    ['European Commission — Waste Framework Directive', 'https://environment.ec.europa.eu/topics/waste-and-recycling/waste-framework-directive_en'],
                ]],
                ['type' => 'note', 'text' => 'This is a corporate positioning and implementation roadmap. Any factory-specific sustainability achievement, certification, recycling rate, carbon reduction or operational portal/blockchain deployment is corroborated before publication.'],
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
            'subtitle' => 'Integrated solutions for brand growth, responsible manufacturing, digital collaboration and future-ready textile innovation.',
            'hero'     => '1600880292203-757bb62b4baf',
            'lead'     => 'Wool & Weave Fashion Ltd. connects international apparel and textile brands, importers, retailers and distribution partners with a coordinated network of product-development, manufacturing, sourcing and commercial services. Our approach combines textile and apparel management experience, disciplined execution, sustainability priorities and evolving digital tools.',
            'pillars'  => ['Global Sourcing', 'Supply Chain', 'Innovation'],
            'sections' => [
                ['type' => 'table', 'eyebrow' => 'Our expertise', 'title' => 'Three interconnected pillars',
                    'columns' => ['Pillar', 'What it covers'],
                    'rows'    => [
                        ['01 Brand Growth Services', 'End-to-end supply-chain management, quality governance, logistics coordination and business expansion.'],
                        ['02 Buyer Portal', 'A proposed unified digital workspace connecting buyers, merchandisers, developers, factories and logistics teams.'],
                        ['03 Innovation, Development & Patenting', 'Fabric and apparel R&D, commercial product engineering and structured intellectual-property development.'],
                    ],
                ],
                ['type' => 'flow', 'eyebrow' => 'How we deliver', 'title' => 'Our Delivery Philosophy',
                    'steps' => ['Right product', 'Right quality', 'Right cost', 'Right time', 'Responsible sourcing'],
                ],

                ['type' => 'lists', 'cols' => 3, 'eyebrow' => '01', 'title' => 'Brand Growth Services',
                    'text'  => 'We support brand growth by aligning design intent, commercial objectives and sourcing strategy with factory capability and delivery reliability. Our integrated account-management model is designed to help buyers accelerate development, diversify supply risk and improve visibility from concept to shipment.',
                    'items' => [
                        ['Strategic sourcing & supply-chain management', [
                            'Product and country sourcing strategies for knitwear, woven garments, denim, activewear, uniforms, fabrics, yarns and selected home textiles.',
                            'Supplier identification, factory capability mapping, onboarding, capacity planning and contingency sourcing across approved partner networks.',
                            'Cost engineering through fabric-construction alternatives, marker efficiency, trims rationalisation, value analysis and transparent commercial negotiations.',
                            'Seasonal planning, calendar management, raw-material booking, critical-path tracking and cross-functional merchandising coordination.',
                            'Responsible sourcing expectations covering documented labour practices, environmental controls and buyer-specific compliance requirements.',
                        ], 'ti-world'],
                        ['Quality management & technical assurance', [
                            'Product risk assessment from tech-pack review, fabric selection, fit and construction through pilot production and bulk release.',
                            'Defined checkpoints for lab dips, strike-offs, trims, size sets, pre-production samples, in-line inspections and final random inspection.',
                            'Fabric and garment testing plans aligned to buyer specifications and applicable standards for dimensional stability, colour fastness, strength, appearance and safety.',
                            'Corrective and preventive action (CAPA), root-cause analysis, factory training and quality-scorecard reviews.',
                            'Traceable documentation of approvals, test results, inspection outcomes and agreed deviations.',
                        ], 'ti-rosette-discount-check'],
                        ['Logistics, order fulfilment & market support', [
                            'Shipment consolidation and freight-forwarder coordination across sea, air and multimodal movements.',
                            'Export-documentation workflow support, packing-list and commercial-invoice coordination, booking visibility and milestone alerts.',
                            'Lead-time optimisation and exception escalation for material delays, production disruptions and shipping changes.',
                            'Account-specific replenishment and repeat-order programs, supported by sell-through insights where customers share data.',
                        ], 'ti-truck-delivery'],
                    ],
                ],
                ['type' => 'prose', 'cream' => true, 'eyebrow' => '01 · Brand Growth Services', 'title' => 'Client value', 'paragraphs' => [
                    'One coordinated commercial interface; faster decision-making; consistent quality expectations; improved shipment transparency; scalable product categories; and a clear route to sustainability-focused sourcing improvements.',
                ]],

                ['type' => 'table', 'eyebrow' => '02 · Buyer Portal', 'title' => 'A connected workspace across the order lifecycle',
                    'text'    => 'The Wool & Weave Buyer Portal is conceived as a secure, role-based digital collaboration environment. The features below describe a proposed implementation roadmap, not a representation that every module is currently deployed.',
                    'columns' => ['Module', 'What it covers'],
                    'rows'    => [
                        ['Product discovery', 'Curated seasonal collections, fabric libraries, material specifications, virtual showrooms and product-development requests.'],
                        ['Sample development', 'Digital tech-pack exchange, sample requests, fit comments, revisions, lab-dip approvals and approval history.'],
                        ['Costing & orders', 'Version-controlled quotations, purchase-order milestones, material booking and order amendment logs.'],
                        ['Production visibility', 'Time-and-action dashboards, planned versus actual progress, capacity alerts and shipment forecasts.'],
                        ['Quality & compliance', 'Inspection records, test reports, supplier compliance documents, corrective-action status and validity reminders.'],
                        ['Shipping & analytics', 'Document repository, shipment milestone tracking, scorecards, on-time delivery trends and performance insights.'],
                    ],
                ],
                ['type' => 'checklist', 'cream' => true, 'eyebrow' => '02 · Buyer Portal', 'title' => 'Digital governance & interoperability', 'items' => [
                    'Role-based access permissions for brand teams, factories, quality personnel and nominated logistics partners.',
                    'Structured audit trails, version history and approval controls for commercially important decisions.',
                    'Secure file management and appropriately governed data sharing, subject to system design and data-protection requirements.',
                    'Potential integration with ERP, PLM, inventory, logistics and business-intelligence systems using agreed interfaces.',
                ]],
                ['type' => 'table', 'eyebrow' => '02 · Buyer Portal', 'title' => 'Recommended phased rollout',
                    'columns'  => ['Phase', 'Scope'],
                    'rows'     => [
                        ['Phase 1', 'Buyer onboarding, digital library and sample tracking.'],
                        ['Phase 2', 'Purchase-order and production milestones, quality records and document exchange.'],
                        ['Phase 3', 'Supplier scorecards, predictive alerts, traceability integrations and advanced analytics.'],
                    ],
                    'footnote' => 'Each phase is piloted and validated before broad deployment.',
                ],

                ['type' => 'lists', 'cream' => true, 'cols' => 2, 'eyebrow' => '03', 'title' => 'Innovation, Developments & Patenting',
                    'text'  => 'Innovation connects creative product development with manufacturability and buyer relevance. Wool & Weave’s R&D direction spans fibre choice, fabric engineering, garment construction, finishing, digital design and sustainability-led improvements, with commercial viability tested alongside performance.',
                    'items' => [
                        ['Textile & garment development', [
                            'Fibre and blend exploration: responsibly sourced cotton, recycled inputs, cellulosics, performance blends and engineered mixed-fibre constructions.',
                            'Knit and woven fabric engineering: yarn selection, knit gauge or weave architecture, GSM, hand-feel, stretch, durability, moisture management and finish selection.',
                            'Product programs across T-shirts, polos, sweatshirts, shirts, denim and non-denim bottoms, dresses, nightwear, outerwear, uniforms and home-textile categories.',
                            'Design-to-sample workflows using CAD patterns, fit iteration, 3D visualisation where available, sampling, testing and cost validation.',
                            'Special finishes and aesthetic innovations evaluated for quality, chemical compliance, production repeatability and buyer relevance.',
                        ], 'ti-needle-thread'],
                        ['Sustainability-focused innovation', [
                            'Material selection based on documented origin, performance, availability and supplier certification scope, rather than unsupported environmental claims.',
                            'Development priorities in reduced waste, efficient cutting, repairability, durability, recycled content and lower-impact processing where evidence supports the benefit.',
                            'Chemical-management and restricted-substance screening aligned to buyer requirements and relevant frameworks such as ZDHC or REACH where applicable.',
                            'Traceability-ready product data covering fibre composition, material suppliers, process stages and supporting transaction records.',
                        ], 'ti-plant-2'],
                    ],
                ],
                ['type' => 'flow', 'cream' => false, 'eyebrow' => '03 · C', 'title' => 'From concept to commercial scale',
                    'text'  => 'Our proposed innovation funnel applies six gates. Each stage carries a decision record for feasibility, quality, impact and commercial readiness.',
                    'steps' => ['Market brief', 'Technical concept', 'Prototype', 'Lab and wear testing', 'Cost / compliance validation', 'Pilot and scaled production'],
                ],
                ['type' => 'checklist', 'cream' => true, 'eyebrow' => '03 · D', 'title' => 'Patenting & intellectual-property strategy',
                    'text'  => 'Patent development is an ambition and a disciplined process, not a claim of granted patents. Potentially protectable textile constructions, functional finishes, manufacturing methods, process controls or digital solutions undergo prior-art review and freedom-to-operate screening with qualified intellectual-property counsel before disclosure or filing.',
                    'items' => [
                        'Maintain a confidential invention register with inventors, dates, drawings, experimental evidence and ownership details.',
                        'Distinguish patents from design rights, trademarks, trade secrets and proprietary know-how; select the appropriate form of protection.',
                        'Confirm joint-development agreements, confidentiality obligations and IP ownership with customers, laboratories and manufacturing partners.',
                        'Assess patentability, filing jurisdictions, costs and timelines before selecting innovations for formal applications.',
                    ],
                ],

                ['type' => 'cards', 'cols' => 3, 'eyebrow' => 'A structured service pathway', 'title' => 'How We Partner with Global Customers',
                    'text'  => 'We engage brands and importers through a structured service pathway.',
                    'items' => [
                        ['Understand', 'Understand brand positioning and product requirements.', 'ti-target-arrow'],
                        ['Curate', 'Curate material and manufacturing options.', 'ti-layout-grid'],
                        ['Co-develop', 'Jointly develop commercially viable samples.', 'ti-shirt'],
                        ['Agree', 'Agree quality and compliance checkpoints.', 'ti-checklist'],
                        ['Execute', 'Execute transparent production calendars.', 'ti-calendar-time'],
                        ['Review', 'Review performance for continuous improvement.', 'ti-chart-line'],
                    ],
                ],
                ['type' => 'prose', 'cream' => true, 'eyebrow' => 'Looking ahead', 'title' => 'Our promise', 'paragraphs' => [
                    'To bring the interconnected capabilities of global sourcing, quality management, logistics coordination, digital collaboration and textile innovation into one dependable commercial relationship—advancing responsible growth for brands and manufacturing partners alike.',
                ]],
                ['type' => 'note', 'text' => 'This corporate capability narrative distinguishes current service positioning from proposed technology modules and prospective patent programs. Buyer-specific certifications, operational metrics, regional presence and patent status are published only after documentary verification.'],
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
