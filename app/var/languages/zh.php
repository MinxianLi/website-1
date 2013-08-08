<?php

    /**
     * Need to keep this as array() vs. [] for Transilex
     */
    $messages = array(
        'language_text'                   => 'English',
        'download'                        => '下载',
        'documentation'                   => '文档',
        'forum'                           => '论坛',
        'blog'                            => '博客',
        'support'                         => '支持',
        'donate'                          => '捐助',
        'store'                           => '应用中心',
        'github'                          => 'GitHub',
        'phalcon_description'             => "<strong>Phalcon</strong>是用C语言实现的拥有<a href=':1:'>高性能</a>和低功耗等特点的PHP开发框架。",
        'the_fastest_php_framework'       => '最快的<br />PHP框架',
        'try_online'                      => '在线尝试',
        'see_screencasts'                 => '演示',
        'everything_you_need_upper'       => '您需要的一切都在这里',
        'full_mvc_applications'           => "完整的<a href=':1:'>MVC</a>应用",
        'single_module'                   => '单模块',
        'multi_module'                    => '多模块',
        'micro_applications'              => '微应用',
        'orm'                             => 'ORM',
        'transactions'                    => '事务',
        'behaviors'                       => 'Behaviors',
        'relations'                       => 'Relations',
        'phql'                            => 'PHQL',
        'events'                          => '事件',
        'validations'                     => '验证',
        'hydration'                       => 'Hydration',
        'logging'                         => '日志',
        'profiling'                       => 'Profiling',
        'sharding'                        => 'Sharding',
        'odm_for_mongo'                   => 'ODM for Mongo',
        'template_engine_volt'            => '模板引擎(Volt)',
        'di_ioc'                          => '依赖注入/反转控制',
        'events_management'               => '事件管理',
        'encryption'                      => '加密处理',
        'http_request'                    => 'HTTP请求',
        'http_response'                   => 'HTTP响应',
        'http_cookies'                    => 'Cookies',
        'escaping'                        => 'Escaping',
        'filtering'                       => '过滤器',
        'forms_builder'                   => '表单创建器',
        'forms_validation'                => '验证',
        'flash_messages'                  => 'Flash Messages',
        'cache'                           => '缓存',
        'pagination'                      => '分页',
        'annotations'                     => '注解',
        'security'                        => '安全',
        'translations'                    => '国际化',
        'assets_management'               => '资源文件管理',
        'universal_auto_loader'           => '通用自动加载',
        'cli'                             => '命令行',
        'phalcon_forum_upper'             => 'PAHLCON论坛',
        'stack_overflow_upper'            => 'STACK OVERFLOW',
        'github_upper'                    => 'GITHUB',
        'email_us_upper'                  => 'EMAIL US',
        'services_upper'                  => '服务',
        'consulting_upper'                => '咨询',
        'requirements_analysis'           => '需求分析',
        'implementation'                  => '实施',
        'ongoing_support'                 => '持续支持',
        'read_more'                       => '阅读更多',
        'hosting_upper'                   => '主机/服务器',
        'phalcon_can_be_installed'        => 'Phalcon可以被安装在',
        'main_upper'                      => '主要',
        'consulting'                      => '咨询',
        'hosting'                         => '主机/服务器',
        'support_upper'                   => '支持',
        'forum_community'                 => '论坛/社区',
        'stack_overflow'                  => 'Stack Overflow',
        'issue_tracker'                   => 'Issue Tracker',
        'get_involved_upper'              => '参与',
        'team'                            => '团队',
        'about'                           => '关于',
        'roadmap'                         => '路线图',
        'donate_to_phalcon'               => '捐助Phalcon:',
        'or'                              => '或',
        'twitter'                         => 'Twitter',
        'facebook'                        => 'Facebook',
        'google_plus'                     => 'Google+',
        'vimeo'                           => 'Vimeo',

        'download_phalcon'                => '下载Phalcon',
        'download_linux'                  => 'Linux/Unix/Mac',
        'download_windows'                => 'Windows DLLs',
        'download_developer_tools'        => '开发工具',
        'download_ide_stubs'              => 'IDE stubs',
        'download_note'                   => 'Phalcon是一个用C实现的扩展，所以您可以下载适合您机器的二进制格式文件或者使用源代码进行编译。',
        'download_compilation'            => '编译',
        'download_compilation_1'          => 'Linux下，使用源代码编译安装是很方便的。',
        'download_requirements'           => '安装要求',
        'download_requirements_1'         => '我们需要提前安装一些库：',
        'download_requirements_2'         => 'PHP 5.x 开发工具包',
        'download_requirements_3'         => 'GCC 编译器',
        'download_compilation_11'         => '1. 从C源代码创建扩展请按照下面的步骤:',
        'download_compilation_12'         => '2. 添加扩展到php.ini文件:',
        'download_compilation_13'         => '3. 最后，重启web服务器',
        'download_debian'                 => 'Debian',
        'download_debian_1'               => "<a href=':1:'>FortRabbit</a>在<a href=':2:'>这里</a>提供了一个repo",
        'download_debian_2'               => '包的名字是php5-phalcon',
        'download_arch'                   => 'Arch Linux',
        'download_arch_1'                 => "ArchLinux下有一个PKGBUILD，<a href=':1:'>点击这里</a>",
        'download_opensuse'               => 'OpenSUSE',
        'download_opensuse_1'             => "这里有另外一个包，点击<a href=':1:'>这里</a>查看 (感谢 <a href=':2:'>Mariusz Łączak</a>)",
        'download_freebsd'                => 'FreeBSD',
        'download_freebsd_1'              => 'FreeBSD下，只需要简单的几行命令即可安装：',
        'download_dependencies'           => '依赖',
        'download_dependencies_1'         => '尽管Phalcon并不直接依赖其他PHP扩展，但还是使用了一部分扩展用于提供某些功能。所使用的扩展如下:',
        'download_dependencies_2'         => '以上的扩展并不是必须的，您可以根据您的需求来安装必须的扩展。举例说，如果您需要使用MySQL，那么您只需要安装PDO 和 PDO/MySQL， 其它如Oracle、 SQlite、 Postgresql 和 Mongo则可以忽略。',
        'download_need_help'              => '需要帮助吗?',
        'download_need_help_1'            => "请查看我们的<a href=':1:'>支持页面</a> 以获取具体的支持方式。我们会尽我们所能去帮助您。",

        'download_windows_note'           => '我们强烈建议您使用对应DLL的PHP最新版本，这样您可以获得Phalcon提供的所有功能。',
        'download_windows_stable'         => '稳定/主要 版本',
        'download_windows_installation'   => '安装',
        'download_windows_installation_1' => "在Windows上安装Phalcon，您可以直接下载编译好的DLL。 编辑您的php.ini，添加扩展到最后， 并重启Web服务器加载扩展。 <a href=':1:'>详细介绍</a>。",
        'download_windows_guides'         => '相关指南',
        'download_windows_guides_xampp'   => '在XAMPP下安装',
        'download_windows_guides_wamp'    => '在WAMP下安装',
        'download_windows_alpha'          => 'Alpha/Beta 版本',
        'download_source_code'            => "源代码: <a href=':1:' target='_download' title='GitHub Repo'>github</a>",
        'download_source_code_switch'     => "源代码 (请切换到相关分支): <a href=':1:' target='_download' title='GitHub Repo'>github</a>",
        'download_no_alpha_beta'          => '目前没有可用的alpha/beta版本',
        'download_windows_older'          => '旧版本',

        'download_devtools_1'             => '这些工具是一些有用的脚本，用于生成结构性的代码。 您应用的核心代码只需要用一句简单的命令即可生成， 让您更加方便地使用Phalcon去开发应用。',
        'download_devtools_docs'          => "文档: <a href=':1:'>Phalcon 开发工具</a>",
        'download_devtools_composer'      => '使用Composer安装',
        'download_devtools_composer_1'    => '安装composer到一个公用的位置或在您的项目里面:',
        'download_devtools_composer_2'    => '根据下面代码创建composer.json文件:',
        'download_devtools_composer_3'    => '运行composer安装器:',
        'download_devtools_composer_4'    => '给phalcon.php创建symbolic link:',
        'download_devtools_download'      => '您可以在<a href=":1:">Github</a>下载或复制包含开发工具的跨平台包.',

        'consulting_header'               => "我们提供Phalcon咨询服务<br />或基于PHP的开发",
        'requirements_analysis_1'         => '开发人员面临的最大问题是很多项目都没有进行充分的需求调研。因此，往往客户的要求完全不同于开发人员的理解和其随后提供的开发结果。',
        'requirements_analysis_2'         => '我们提供的服务包含需求分析，参与客户讨论，并把他们的需求转换成详细的开发文档。',
        'implementation_1'                => '如果你想雇佣我们为您开发应用程序，我们将非常乐意。使用最新的技术，我们可以为您的任务或项目提供一个健壮的，经过完全测试的和完整文档的解决方案。',
        'ongoing_support_1'               => '对于客户感兴趣的技术支持合同，我们可以持续为他们的项目提供支持。客户可以按小时购买技术支持(至少2小时)，每小时50美元。',
        'ongoing_support_2'               => '技术支持小时不会过期，并且可以在任何需要时使用。如果客户希望一个持续的技术支持方案，我们可以提供更适合、更灵活的方案。',
        'sponsors'                        => '赞助商',
        'sponsors_1'                      => '对那些希望赞助我们的工作和进一步发展Phalcon，我们可以提供多种适合任何预算的赞助方案。',
        'sponsors_2'                      => '此外，用户可能希望实现某些很受欢迎或者很复杂的功能，但通常需要很长时间才能完成。当然，在我们正常的价格范围内，我们完全可以接纳这样的要求。',
        'contact'                         => '联系',
        'contact_1'                       => "随时<a href=':1:'>联系我们</a>讨论您的需求，我们将根据项目大小提供一个最适合您需求和预算的解决方案。",

        'phalcon_team'                    => 'Phalcon团队',
        'team_andres_1'                   => 'Andres并不是开源项目里的陌生人。在过去的九年里，他已经设计和发布许多PHP框架、参与web开发，这是他的激情所在。',
        'team_andres_2'                   => "Andres是一个TR35最佳青年创新者，他的主要任务是在选择和实施或使用正确的工具来完成工作，主要集中在性能上。因此在2011年，一个新的想法是在工作中诞生了：为PHP开发人员建立一种新的框架，一个侧重于高可用性、拥有丰富功能和高性能的框架。",
        'team_andres_3'                   => '因为这种新的想法，Phalcon诞生了。一个用C语言实现的PHP框架，在为开发人员提供丰富功能的同时，保持高性能和低功耗。',
        'team_andres_4'                   => 'Andres是该灵感的创造者和Phalcon的核心开发人员。',
        'team_nikos_1'                    => 'Nikos在IT行业已经超过20多年。在2000年，他就已经开始接触PHP，并在他个人和公司的项目中使用PHP。',
        'team_nikos_2'                    => '他喜欢发现新的技术和方法，将它们集成到现有的应用程序中，由此获得它们的好处。',
        'team_nikos_3'                    => '',
        'team_nikos_4'                    => "Nikos依然关心新技术和创新产品。他加入核心团队后，主要任务涉及NFRs的协调和bug修复，测试，文档以及孵化器。Nikos还负责维护Windows DLL项目，并尽可能提供支持。",
        'team_nikolay_1'                  => 'Nikolay开发Web应用程序已超过10年。他曾经参与过高性能和复杂网站的设计。',
        'team_nikolay_2'                  => 'Nikolay参与开源项目的工作已经很长一段时间了，每当有需要时就尽可能利用开源项目。因此，他开始使用他的个人时间通过fork项目，优化项目结构和提出建议，以及性能优化等来回馈给社区。他一直积极地根据来自社会各界的反馈改进开源CMS项目。',
        'team_nikolay_3'                  => '他坚持参与开源项目和回馈社区的心态已经帮助他提升了技术。',
        'team_nikolay_4'                  => 'Nikolay是一个Web应用性能最大化的狂热支持者。在他接触“Phalcon”后，他决定继续使用的这个项目，并成为它的传播者， 并努力向俄语社区和俄语开发人员提供资源。',
        'team_nikolay_5'                  => "他的贡献包含： 俄语镜像网站 (<a href=':1:'>http://www.phalconphp.ru</a>)， 俄语文档镜像 (<a href=':2:'>http://docs.phalconphp.ru</a>)， 持续改正和修改英文文档，Fackebook社区组织Vkontakte (<a href=':3:'>http://vk.com/phalconphp</a>)。",

        'get_involved'                    => '加入我们',
        'about_description_1'             => "神奇的项目需要一个神奇的您。我们可能还不知道您，但我们认为您是一个非常适合创建更好Web应用的人。总之，我们已经准备好改变世界！在Phalcon里，我们正在构建一个新一代的PHP框架，我们想给您一个令人惊异的具有高性能的，使您开发更愉悦，更易使用的开发框架。",
        'about_description_2'             => '我们希望您能像我们一样享受Phalcon。我们打开怀抱，期待与您合作像以下这样的项目：',
        'about_translations_1'            => "",
        'documentation_upper'             => '文档',
        'about_documentation_1'           => '本网站的仓库是在github上。您可以自由的校订，修正错别字，添加新例子，添加新教程等，如果您可以的一些内容翻译成另一种语言，我们将非常感激！',
        'screencasts'                     => '示例',
        'about_screencasts_1'             => "我们欢迎任何示例程序，如果您有一些额外的时间并且想要支持社区，您可以制作包含框架任何功能的视频教学，我们将会非常欢迎的。 请查看我们的<a href=':1:'> Vimeo频道</ A>指南。",
        'tests'                           => '测试',
        'about_tests_1'                   => "没有任何软件是完全没有bug的，如果您发现任何一个，请立即告诉我们。 我们有一个比<a href=':1:'>8000测试</a>更严格的测试套件。 但是，仅仅单元测试是不够的。 帮助我们改进我们的测试套件，您可以通过添加更多的测试用例或改善当前的某个测试。每个测试都会使框架更加稳定，并有助于避免错误重新产生或破坏目前正常运行的功能。框架的整体稳定性，在很大程度上取决于我们的测试。",
        'sample_applications'             => '示例应用',
        'about_sample_apps_1'             => '大型示例程序可以帮助其他人更好的理解如何使用Phalcon来创建复杂的程序。 请分享示例程序以帮助其他人更好的使用Phalcon，同时您也可以接收来自其他人对您的反馈。',
        'evangelism'                      => '传道者',
        'about_evangelism_1'              => "仍然有很多人不知道Phalcon的存在，虽然它确实很好。我们确信，当许多开发者了解Phalcon是什么和可以如何帮助他们后，他们将受益于Phalcon。如果您知道任何PHP活动/会议，并且您想做一个关于Phalcon项目的演讲，我们会全力支持。谁不希望了解革命性的PHP开发工具呢？",
        'share_your_experiences'          => '分享您的经验',
        'about_share_experiences_1'       => "不要害羞，请在社区自由分享Phalcon对您非常有用的。如果Phalcon对您而言非常好，让我们一起分享到社区。此外，请讨论哪些组件需要额外的工作才可以让您更易使用它，可以获得哪些好处等。虽然不是所有的功能都可以立即实现，但您提出的新功能可以极大地帮助我们改造未来的项目。您的反馈将有助于我们所有人。",
        'about_blog_1'                    => "如果您喜欢写作，记住<a href=':1:'>我们的博客</ a>是可以公开发布由您编写的教程。如果您有自己的博客和有写一些关于Phalcon的文章，我们也可以发布在我们的社交网络上，以达到提高您的知名度。如果您的博客文章使用非英语的其他语言，我们会分享它，并可能翻译它。如果您知道某些PHP相关博客的听从会对Phalcon感兴趣，请让我们知道。",
        'donations_sponsoring'            => 'Donations / Sponsoring',
        'about_sponsoring_1'              => "我们是一个小型但高效的核心开发团队，我们试着花尽可能多的时间在Phalcon项目上。对于这个项目我们所有的激情都是让她每一天都变得更好。Phalcon是一个开源软件，需要志愿者的不断努力使其不断进化。您可以通过捐赠或资助以帮助我们积极开发这个项目。更多的时间和资源致力于这个项目意味着项目更活跃，更多的改进，更好的支持和更多的神奇功能。",
        'social_networks'                 => '社交网络',
        'about_social_networks_1'         => "Phalcon每天都在不断发展，希望通过我们的努力能够使它变得更好。现在社交网络是我们生活的一部分，我们通过它与他人互动。在您的社交圈内，分享您的Phalcon经验将极大提高Phalcon的知名度。越来越多的人将加入我们的社区组织，从而使其功能更强大，更丰富、更受欢迎。如同“+1”，分享我们在每个社交网络上的发帖，参与讨论关于这些帖子。人们会通过您的互动发现Phalcon，并感谢您！",
        'about_social_networks_2'         => "在大部分流行的社交网络上都有我们， 通过关注我们， 您可以帮助我们增加项目的知名度：",
        'follow_on_twitter'               => 'Follow us on Twitter',
        'facebook_page'                   => 'Facebook Page',
        'google_plus_page'                => 'Google+ Page',
        'official_blog'                   => '官方博客',
        'star_on_github'                  => '在Github上，给项目加星标',
        'thank_you'                       => '谢谢您！',
        'about_thank_you_1'               => '我们感谢所有推动Phalcon成为最佳框架的贡献者和社区成员。您的评论和参与是我们做得更好的动力。我们希望，Phalcon能够满足并超越你们对它的信任。',
        'flying_with_phalcon'             => '谢谢和Phalcon一起放飞远行！ &lt;3',

        'hosting_description'             => 'Phalcon可以安装在任何机器上，只要托管服务提供商提供SSH超级用户权限(或sudo)。下面是一些提供此类服务的有信誉的公司列表：',
        'hosting_fortrabbit_1'            => 'Fortrabbit提供许多托管计划(有一个针对开发人员是免费的 - 但有一些限制)，可以满足大部分的开发人员的期望，可以用来尝试Phalcon或者部署他们的应用程序。',
        'hosting_fortrabbit_2'            => "他们提供各种<a href=':1:'>扩展</ A>，可以满足即使是很苛刻的项目。",
        'hosting_fortrabbit_3'            => 'Phalcon的稳定版本已经预装，您可以通过控制面板激活他们。',
        'hosting_webfaction_1'            => 'WebFaction开发人员主机。拥有完全的shell权限，速度很快的服务器，所有您最喜爱的工具已经为您预先安装和维护。',
        'hosting_webfaction_2'            => "在WebFaction安装Phalcon， 请参见说明，在<a href=':1:'>这里</a>",
        'hosting_amazon_ec2_1'            => 'Amazon Elastic Compute Cloud提供可伸缩的，按需付费的云服务。',
        'hosting_amazon_ec2_2'            => "选择一个预先配置好的Amazon Machine Image (AMI) 并立即运行。 或者创建一个包含您应用，库，数据和相关配置的AMI。<a href=':1:'>参见更多</a>",
        'hosting_linode_1'                => "部署和管理您的Linode VPS。 选择一个Linux发行版，并选择服务器配置和数据中心位置后购买即可。 <a href=':1:'>参见更多</a>",
        'hosting_digital_ocean_1'         => "Blazing Fast Cloun Technology，专为开发人员构建的云服务器。 部署一个SSD服务器只需55秒。 <a href=':1:'>参见更多</a>",
        'hosting_rackspace_1'             => "云服务是一些运行Linux或Windows&reg;的虚拟机，在Rackspace Cloud上的服务器。 您可以根据需要扩展CPU、 内存和存储空间。 最重要的是，您可以按需付费。 <a href=':1:'>参见更多</a>",
        'hosting_install_instructions'    => '使用标准安装说明来安装Phalcon。',

        'testimonials'                    => '荣誉',
        'testimonials_description'        => "下面是一些来自Phalcon开发人员和用户的感言和成功案例。 我们非常欢迎您通过Email把您的成功案例发给我们，并且它会被发表到我们的博客上。 如果您准备发送或者与我们联系，请随时通过发送到Email<a href='mailto::1:'>:2:</a>。",
        'testimonials_1'                  => "",
        'testimonials_2'                  => "",
        'testimonials_3'                  => "",
        'testimonials_4'                  => "",
        'testimonials_5'                  => "",

        'support_note'                    => "",
        'support_download_page'           => "",
        'support_documentation_1'         => "",
        'support_phalcon_forum'           => "",
        'support_forum_1'                 => "",
        'support_irc'                     => "",
        'support_irc_1'                   => "",
        'support_stack_overflow_1'        => "",
        'support_please_note'             => "",
        'support_please_note_1'           => "",
        'support_please_note_2'           => "",
        'support_please_note_3'           => "",
        'support_please_note_4'           => "",
        'support_please_note_5'           => "",
        'support_reporting_a_bug'         => "",
        'support_reporting_a_bug_1'       => "",


    );

    // return $messages;