<?php
// Generated by ZF2's ./bin/classmap_generator.php
return array(
    'Jobs\Acl\CreateAssertion'                                          => __DIR__ . '/Jobs/Acl/CreateAssertion.php',
    'Jobs\Acl\WriteAssertion'                                           => __DIR__ . '/Jobs/Acl/WriteAssertion.php',
    'Jobs\Auth\Dependency\ListListener'                                 => __DIR__ . '/Jobs/Auth/Dependency/ListListener.php',
    'Jobs\Controller\AdminCategoriesController'                         => __DIR__ . '/Jobs/Controller/AdminCategoriesController.php',
    'Jobs\Controller\AdminController'                                   => __DIR__ . '/Jobs/Controller/AdminController.php',
    'Jobs\Controller\ApiJobListByChannelController'                     => __DIR__ . '/Jobs/Controller/ApiJobListByChannelController.php',
    'Jobs\Controller\ApiJobListByOrganizationController'                => __DIR__ . '/Jobs/Controller/ApiJobListByOrganizationController.php',
    'Jobs\Controller\ApprovalController'                                => __DIR__ . '/Jobs/Controller/ApprovalController.php',
    'Jobs\Controller\AssignUserController'                              => __DIR__ . '/Jobs/Controller/AssignUserController.php',
    'Jobs\Controller\ConsoleController'                                 => __DIR__ . '/Jobs/Controller/ConsoleController.php',
    'Jobs\Controller\ImportController'                                  => __DIR__ . '/Jobs/Controller/ImportController.php',
    'Jobs\Controller\IndexController'                                   => __DIR__ . '/Jobs/Controller/IndexController.php',
    'Jobs\Controller\JobboardController'                                => __DIR__ . '/Jobs/Controller/JobboardController.php',
    'Jobs\Controller\ManageController'                                  => __DIR__ . '/Jobs/Controller/ManageController.php',
    'Jobs\Controller\Plugin\InitializeJob'                              => __DIR__ . '/Jobs/Controller/Plugin/InitializeJob.php',
    'Jobs\Controller\TemplateController'                                => __DIR__ . '/Jobs/Controller/TemplateController.php',
    'Jobs\Entity\AtsMode'                                               => __DIR__ . '/Jobs/Entity/AtsMode.php',
    'Jobs\Entity\AtsModeInterface'                                      => __DIR__ . '/Jobs/Entity/AtsModeInterface.php',
    'Jobs\Entity\Category'                                              => __DIR__ . '/Jobs/Entity/Category.php',
    'Jobs\Entity\Classifications'                                       => __DIR__ . '/Jobs/Entity/Classifications.php',
    'Jobs\Entity\Coordinates'                                           => __DIR__ . '/Jobs/Entity/Coordinates.php',
    'Jobs\Entity\CoordinatesInterface'                                  => __DIR__ . '/Jobs/Entity/CoordinatesInterface.php',
    'Jobs\Entity\History'                                               => __DIR__ . '/Jobs/Entity/History.php',
    'Jobs\Entity\HistoryInterface'                                      => __DIR__ . '/Jobs/Entity/HistoryInterface.php',
    'Jobs\Entity\Hydrator\JobsEntityHydratorFactory'                    => __DIR__ . '/Jobs/Entity/Hydrator/JobsEntityHydratorFactory.php',
    'Jobs\Entity\Hydrator\JsonJobsEntityHydratorFactory'                => __DIR__ . '/Jobs/Entity/Hydrator/JsonJobsEntityHydratorFactory.php',
    'Jobs\Entity\Hydrator\TemplateValuesHydrator'                       => __DIR__ . '/Jobs/Entity/Hydrator/TemplateValuesHydrator.php',
    'Jobs\Entity\Job'                                                   => __DIR__ . '/Jobs/Entity/Job.php',
    'Jobs\Entity\JobInterface'                                          => __DIR__ . '/Jobs/Entity/JobInterface.php',
    'Jobs\Entity\JobSnapshot'                                           => __DIR__ . '/Jobs/Entity/JobSnapshot.php',
    'Jobs\Entity\JobSnapshotMeta'                                       => __DIR__ . '/Jobs/Entity/JobSnapshotMeta.php',
    'Jobs\Entity\Location'                                              => __DIR__ . '/Jobs/Entity/Location.php',
    'Jobs\Entity\Publisher'                                             => __DIR__ . '/Jobs/Entity/Publisher.php',
    'Jobs\Entity\Status'                                                => __DIR__ . '/Jobs/Entity/Status.php',
    'Jobs\Entity\StatusInterface'                                       => __DIR__ . '/Jobs/Entity/StatusInterface.php',
    'Jobs\Entity\TemplateValues'                                        => __DIR__ . '/Jobs/Entity/TemplateValues.php',
    'Jobs\Entity\TemplateValuesInterface'                               => __DIR__ . '/Jobs/Entity/TemplateValuesInterface.php',
    'Jobs\Factory\Auth\Dependency\ListListenerFactory'                  => __DIR__ . '/Jobs/Factory/Auth/Dependency/ListListenerFactory.php',
    'Jobs\Factory\Controller\ApiJobListByOrganizationControllerFactory' => __DIR__ . '/Jobs/Factory/Controller/ApiJobListByOrganizationControllerFactory.php',
    'Jobs\Factory\Controller\ApprovalControllerFactory'                 => __DIR__ . '/Jobs/Factory/Controller/ApprovalControllerFactory.php',
    'Jobs\Factory\Controller\AssignUserControllerFactory'               => __DIR__ . '/Jobs/Factory/Controller/AssignUserControllerFactory.php',
    'Jobs\Factory\Controller\IndexControllerFactory'                    => __DIR__ . '/Jobs/Factory/Controller/IndexControllerFactory.php',
    'Jobs\Factory\Controller\JobboardControllerFactory'                 => __DIR__ . '/Jobs/Factory/Controller/JobboardControllerFactory.php',
    'Jobs\Factory\Controller\ManageControllerFactory'                   => __DIR__ . '/Jobs/Factory/Controller/ManageControllerFactory.php',
    'Jobs\Factory\Controller\Plugin\InitializeJobFactory'               => __DIR__ . '/Jobs/Factory/Controller/Plugin/InitializeJobFactory.php',
    'Jobs\Factory\Controller\TemplateControllerFactory'                 => __DIR__ . '/Jobs/Factory/Controller/TemplateControllerFactory.php',
    'Jobs\Factory\Filter\ChannelPricesFactory'                          => __DIR__ . '/Jobs/Factory/Filter/ChannelPricesFactory.php',
    'Jobs\Factory\Filter\ViewModelTemplateFilterFactory'                => __DIR__ . '/Jobs/Factory/Filter/ViewModelTemplateFilterFactory.php',
    'Jobs\Factory\Form\ActiveOrganizationSelectFactory'                 => __DIR__ . '/Jobs/Factory/Form/ActiveOrganizationSelectFactory.php',
    'Jobs\Factory\Form\BaseFieldsetFactory'                             => __DIR__ . '/Jobs/Factory/Form/BaseFieldsetFactory.php',
    'Jobs\Factory\Form\CompanyNameFieldsetFactory'                      => __DIR__ . '/Jobs/Factory/Form/CompanyNameFieldsetFactory.php',
    'Jobs\Factory\Form\HiringOrganizationSelectFactory'                 => __DIR__ . '/Jobs/Factory/Form/HiringOrganizationSelectFactory.php',
    'Jobs\Factory\Form\Hydrator\OrganizationNameHydratorFactory'        => __DIR__ . '/Jobs/Factory/Form/Hydrator/OrganizationNameHydratorFactory.php',
    'Jobs\Factory\Form\ImportFactory'                                   => __DIR__ . '/Jobs/Factory/Form/ImportFactory.php',
    'Jobs\Factory\Form\InputFilter\AtsModeFactory'                      => __DIR__ . '/Jobs/Factory/Form/InputFilter/AtsModeFactory.php',
    'Jobs\Factory\Form\JobFactory'                                      => __DIR__ . '/Jobs/Factory/Form/JobFactory.php',
    'Jobs\Factory\Form\JobboardSearchFactory'                           => __DIR__ . '/Jobs/Factory/Form/JobboardSearchFactory.php',
    'Jobs\Factory\Form\ListFilterLocationFieldsetFactory'               => __DIR__ . '/Jobs/Factory/Form/ListFilterLocationFieldsetFactory.php',
    'Jobs\Factory\Form\MultipostingMultiCheckboxFactory'                => __DIR__ . '/Jobs/Factory/Form/MultipostingMultiCheckboxFactory.php',
    'Jobs\Factory\Form\MultipostingSelectFactory'                       => __DIR__ . '/Jobs/Factory/Form/MultipostingSelectFactory.php',
    'Jobs\Factory\JobEventManagerFactory'                               => __DIR__ . '/Jobs/Factory/JobEventManagerFactory.php',
    'Jobs\Factory\Listener\AdminWidgetProviderFactory'                  => __DIR__ . '/Jobs/Factory/Listener/AdminWidgetProviderFactory.php',
    'Jobs\Factory\Listener\DeleteJobFactory'                            => __DIR__ . '/Jobs/Factory/Listener/DeleteJobFactory.php',
    'Jobs\Factory\Listener\GetOrganizationManagersFactory'              => __DIR__ . '/Jobs/Factory/Listener/GetOrganizationManagersFactory.php',
    'Jobs\Factory\Listener\LoadActiveOrganizationsFactory'              => __DIR__ . '/Jobs/Factory/Listener/LoadActiveOrganizationsFactory.php',
    'Jobs\Factory\Listener\MailSenderFactory'                           => __DIR__ . '/Jobs/Factory/Listener/MailSenderFactory.php',
    'Jobs\Factory\Model\ApiJobDehydratorFactory'                        => __DIR__ . '/Jobs/Factory/Model/ApiJobDehydratorFactory.php',
    'Jobs\Factory\ModuleOptionsFactory'                                 => __DIR__ . '/Jobs/Factory/ModuleOptionsFactory.php',
    'Jobs\Factory\Options\ChannelOptionsFactory'                        => __DIR__ . '/Jobs/Factory/Options/ChannelOptionsFactory.php',
    'Jobs\Factory\Options\ProviderOptionsFactory'                       => __DIR__ . '/Jobs/Factory/Options/ProviderOptionsFactory.php',
    'Jobs\Factory\Paginator\ActiveOrganizationsPaginatorFactory'        => __DIR__ . '/Jobs/Factory/Paginator/ActiveOrganizationsPaginatorFactory.php',
    'Jobs\Factory\Repository\DefaultCategoriesBuilderFactory'           => __DIR__ . '/Jobs/Factory/Repository/DefaultCategoriesBuilderFactory.php',
    'Jobs\Factory\Repository\Filter\PaginationAdminQueryFactory'        => __DIR__ . '/Jobs/Factory/Repository/Filter/PaginationAdminQueryFactory.php',
    'Jobs\Factory\Repository\Filter\PaginationQueryFactory'             => __DIR__ . '/Jobs/Factory/Repository/Filter/PaginationQueryFactory.php',
    'Jobs\Factory\Service\JobsPublisherFactory'                         => __DIR__ . '/Jobs/Factory/Service/JobsPublisherFactory.php',
    'Jobs\Factory\View\Helper\AdminEditLinkFactory'                     => __DIR__ . '/Jobs/Factory/View/Helper/AdminEditLinkFactory.php',
    'Jobs\Factory\View\Helper\ApplyUrlFactory'                          => __DIR__ . '/Jobs/Factory/View/Helper/ApplyUrlFactory.php',
    'Jobs\Factory\View\Helper\JobUrlFactory'                            => __DIR__ . '/Jobs/Factory/View/Helper/JobUrlFactory.php',
    'Jobs\Filter\ChannelPrices'                                         => __DIR__ . '/Jobs/Filter/ChannelPrices.php',
    'Jobs\Filter\ViewModelTemplateFilterAbstract'                       => __DIR__ . '/Jobs/Filter/ViewModelTemplateFilterAbstract.php',
    'Jobs\Filter\ViewModelTemplateFilterForm'                           => __DIR__ . '/Jobs/Filter/ViewModelTemplateFilterForm.php',
    'Jobs\Filter\ViewModelTemplateFilterJob'                            => __DIR__ . '/Jobs/Filter/ViewModelTemplateFilterJob.php',
    'Jobs\Form\AdminJobEdit'                                            => __DIR__ . '/Jobs/Form/AdminJobEdit.php',
    'Jobs\Form\AdminSearchFormElementsFieldset'                         => __DIR__ . '/Jobs/Form/AdminSearchFormElementsFieldset.php',
    'Jobs\Form\ApplyIdentifierElement'                                  => __DIR__ . '/Jobs/Form/ApplyIdentifierElement.php',
    'Jobs\Form\AtsMode'                                                 => __DIR__ . '/Jobs/Form/AtsMode.php',
    'Jobs\Form\AtsModeFieldset'                                         => __DIR__ . '/Jobs/Form/AtsModeFieldset.php',
    'Jobs\Form\Base'                                                    => __DIR__ . '/Jobs/Form/Base.php',
    'Jobs\Form\BaseFieldset'                                            => __DIR__ . '/Jobs/Form/BaseFieldset.php',
    'Jobs\Form\CategoriesContainer'                                     => __DIR__ . '/Jobs/Form/CategoriesContainer.php',
    'Jobs\Form\ClassificationsFieldset'                                 => __DIR__ . '/Jobs/Form/ClassificationsFieldset.php',
    'Jobs\Form\ClassificationsForm'                                     => __DIR__ . '/Jobs/Form/ClassificationsForm.php',
    'Jobs\Form\CompanyName'                                             => __DIR__ . '/Jobs/Form/CompanyName.php',
    'Jobs\Form\CompanyNameElement'                                      => __DIR__ . '/Jobs/Form/CompanyNameElement.php',
    'Jobs\Form\CompanyNameFieldset'                                     => __DIR__ . '/Jobs/Form/CompanyNameFieldset.php',
    'Jobs\Form\CustomerNote'                                            => __DIR__ . '/Jobs/Form/CustomerNote.php',
    'Jobs\Form\CustomerNoteFieldset'                                    => __DIR__ . '/Jobs/Form/CustomerNoteFieldset.php',
    'Jobs\Form\Element\ManagerSelect'                                   => __DIR__ . '/Jobs/Form/Element/ManagerSelect.php',
    'Jobs\Form\Element\StatusSelect'                                    => __DIR__ . '/Jobs/Form/Element/StatusSelect.php',
    'Jobs\Form\HiringOrganizationSelect'                                => __DIR__ . '/Jobs/Form/HiringOrganizationSelect.php',
    'Jobs\Form\Hydrator\JobDescriptionHydrator'                         => __DIR__ . '/Jobs/Form/Hydrator/JobDescriptionHydrator.php',
    'Jobs\Form\Hydrator\PreviewLinkHydrator'                            => __DIR__ . '/Jobs/Form/Hydrator/PreviewLinkHydrator.php',
    'Jobs\Form\Hydrator\Strategy\JobDescriptionBenefitsStrategy'        => __DIR__ . '/Jobs/Form/Hydrator/Strategy/JobDescriptionBenefitsStrategy.php',
    'Jobs\Form\Hydrator\Strategy\JobDescriptionDescriptionStrategy'     => __DIR__ . '/Jobs/Form/Hydrator/Strategy/JobDescriptionDescriptionStrategy.php',
    'Jobs\Form\Hydrator\Strategy\JobDescriptionQualificationsStrategy'  => __DIR__ . '/Jobs/Form/Hydrator/Strategy/JobDescriptionQualificationsStrategy.php',
    'Jobs\Form\Hydrator\Strategy\JobDescriptionRequirementsStrategy'    => __DIR__ . '/Jobs/Form/Hydrator/Strategy/JobDescriptionRequirementsStrategy.php',
    'Jobs\Form\Hydrator\Strategy\JobDescriptionTitleStrategy'           => __DIR__ . '/Jobs/Form/Hydrator/Strategy/JobDescriptionTitleStrategy.php',
    'Jobs\Form\Hydrator\Strategy\JobManagerStrategy'                    => __DIR__ . '/Jobs/Form/Hydrator/Strategy/JobManagerStrategy.php',
    'Jobs\Form\Hydrator\Strategy\OrganizationNameStrategy'              => __DIR__ . '/Jobs/Form/Hydrator/Strategy/OrganizationNameStrategy.php',
    'Jobs\Form\Hydrator\TemplateLabelHydrator'                          => __DIR__ . '/Jobs/Form/Hydrator/TemplateLabelHydrator.php',
    'Jobs\Form\Import'                                                  => __DIR__ . '/Jobs/Form/Import.php',
    'Jobs\Form\ImportFieldset'                                          => __DIR__ . '/Jobs/Form/ImportFieldset.php',
    'Jobs\Form\InputFilter\AtsMode'                                     => __DIR__ . '/Jobs/Form/InputFilter/AtsMode.php',
    'Jobs\Form\InputFilter\CompanyName'                                 => __DIR__ . '/Jobs/Form/InputFilter/CompanyName.php',
    'Jobs\Form\InputFilter\JobLocationEdit'                             => __DIR__ . '/Jobs/Form/InputFilter/JobLocationEdit.php',
    'Jobs\Form\InputFilter\JobLocationNew'                              => __DIR__ . '/Jobs/Form/InputFilter/JobLocationNew.php',
    'Jobs\Form\Job'                                                     => __DIR__ . '/Jobs/Form/Job.php',
    'Jobs\Form\JobDescription'                                          => __DIR__ . '/Jobs/Form/JobDescription.php',
    'Jobs\Form\JobDescriptionBenefits'                                  => __DIR__ . '/Jobs/Form/JobDescriptionBenefits.php',
    'Jobs\Form\JobDescriptionDescription'                               => __DIR__ . '/Jobs/Form/JobDescriptionDescription.php',
    'Jobs\Form\JobDescriptionFieldset'                                  => __DIR__ . '/Jobs/Form/JobDescriptionFieldset.php',
    'Jobs\Form\JobDescriptionHtml'                                      => __DIR__ . '/Jobs/Form/JobDescriptionHtml.php',
    'Jobs\Form\JobDescriptionQualifications'                            => __DIR__ . '/Jobs/Form/JobDescriptionQualifications.php',
    'Jobs\Form\JobDescriptionRequirements'                              => __DIR__ . '/Jobs/Form/JobDescriptionRequirements.php',
    'Jobs\Form\JobDescriptionTemplate'                                  => __DIR__ . '/Jobs/Form/JobDescriptionTemplate.php',
    'Jobs\Form\JobDescriptionTitle'                                     => __DIR__ . '/Jobs/Form/JobDescriptionTitle.php',
    'Jobs\Form\JobboardSearch'                                          => __DIR__ . '/Jobs/Form/JobboardSearch.php',
    'Jobs\Form\ListFilter'                                              => __DIR__ . '/Jobs/Form/ListFilter.php',
    'Jobs\Form\ListFilterAdmin'                                         => __DIR__ . '/Jobs/Form/ListFilterAdmin.php',
    'Jobs\Form\ListFilterAdminFieldset'                                 => __DIR__ . '/Jobs/Form/ListFilterAdminFieldset.php',
    'Jobs\Form\ListFilterBaseFieldset'                                  => __DIR__ . '/Jobs/Form/ListFilterBaseFieldset.php',
    'Jobs\Form\ListFilterLocation'                                      => __DIR__ . '/Jobs/Form/ListFilterLocation.php',
    'Jobs\Form\ListFilterLocationFieldset'                              => __DIR__ . '/Jobs/Form/ListFilterLocationFieldset.php',
    'Jobs\Form\ListFilterPersonal'                                      => __DIR__ . '/Jobs/Form/ListFilterPersonal.php',
    'Jobs\Form\ListFilterPersonalFieldset'                              => __DIR__ . '/Jobs/Form/ListFilterPersonalFieldset.php',
    'Jobs\Form\Multipost'                                               => __DIR__ . '/Jobs/Form/Multipost.php',
    'Jobs\Form\MultipostButtonFieldset'                                 => __DIR__ . '/Jobs/Form/MultipostButtonFieldset.php',
    'Jobs\Form\MultipostFieldset'                                       => __DIR__ . '/Jobs/Form/MultipostFieldset.php',
    'Jobs\Form\MultipostingSelect'                                      => __DIR__ . '/Jobs/Form/MultipostingSelect.php',
    'Jobs\Form\OrganizationSelect'                                      => __DIR__ . '/Jobs/Form/OrganizationSelect.php',
    'Jobs\Form\Preview'                                                 => __DIR__ . '/Jobs/Form/Preview.php',
    'Jobs\Form\PreviewFieldset'                                         => __DIR__ . '/Jobs/Form/PreviewFieldset.php',
    'Jobs\Form\PreviewLink'                                             => __DIR__ . '/Jobs/Form/PreviewLink.php',
    'Jobs\Form\TemplateLabelBenefits'                                   => __DIR__ . '/Jobs/Form/TemplateLabelBenefits.php',
    'Jobs\Form\TemplateLabelQualifications'                             => __DIR__ . '/Jobs/Form/TemplateLabelQualifications.php',
    'Jobs\Form\TemplateLabelRequirements'                               => __DIR__ . '/Jobs/Form/TemplateLabelRequirements.php',
    'Jobs\Form\Validator\UniqueApplyId'                                 => __DIR__ . '/Jobs/Form/Validator/UniqueApplyId.php',
    'Jobs\Form\Validator\UniqueApplyIdFactory'                          => __DIR__ . '/Jobs/Form/Validator/UniqueApplyIdFactory.php',
    'Jobs\Form\View\Helper\PreviewLink'                                 => __DIR__ . '/Jobs/Form/View/Helper/PreviewLink.php',
    'Jobs\Listener\AdminWidgetProvider'                                 => __DIR__ . '/Jobs/Listener/AdminWidgetProvider.php',
    'Jobs\Listener\DeleteJob'                                           => __DIR__ . '/Jobs/Listener/DeleteJob.php',
    'Jobs\Listener\Events\JobEvent'                                     => __DIR__ . '/Jobs/Listener/Events/JobEvent.php',
    'Jobs\Listener\GetOrganizationManagers'                             => __DIR__ . '/Jobs/Listener/GetOrganizationManagers.php',
    'Jobs\Listener\LoadActiveOrganizations'                             => __DIR__ . '/Jobs/Listener/LoadActiveOrganizations.php',
    'Jobs\Listener\MailSender'                                          => __DIR__ . '/Jobs/Listener/MailSender.php',
    'Jobs\Listener\Publisher'                                           => __DIR__ . '/Jobs/Listener/Publisher.php',
    'Jobs\Listener\Response\JobResponse'                                => __DIR__ . '/Jobs/Listener/Response/JobResponse.php',
    'Jobs\Model\ApiJobDehydrator'                                       => __DIR__ . '/Jobs/Model/ApiJobDehydrator.php',
    'Jobs\Options\BaseFieldsetOptions'                                  => __DIR__ . '/Jobs/Options/BaseFieldsetOptions.php',
    'Jobs\Options\ChannelOptions'                                       => __DIR__ . '/Jobs/Options/ChannelOptions.php',
    'Jobs\Options\JobboardSearchOptions'                                => __DIR__ . '/Jobs/Options/JobboardSearchOptions.php',
    'Jobs\Options\ModuleOptions'                                        => __DIR__ . '/Jobs/Options/ModuleOptions.php',
    'Jobs\Options\ProviderOptions'                                      => __DIR__ . '/Jobs/Options/ProviderOptions.php',
    'Jobs\Paginator\JobsAdminPaginatorFactory'                          => __DIR__ . '/Jobs/Paginator/JobsAdminPaginatorFactory.php',
    'Jobs\Paginator\JobsPaginatorFactory'                               => __DIR__ . '/Jobs/Paginator/JobsPaginatorFactory.php',
    'Jobs\Repository\Categories'                                        => __DIR__ . '/Jobs/Repository/Categories.php',
    'Jobs\Repository\DefaultCategoriesBuilder'                          => __DIR__ . '/Jobs/Repository/DefaultCategoriesBuilder.php',
    'Jobs\Repository\Event\UpdatePermissionsSubscriber'                 => __DIR__ . '/Jobs/Repository/Event/UpdatePermissionsSubscriber.php',
    'Jobs\Repository\Filter\PaginationAdminQuery'                       => __DIR__ . '/Jobs/Repository/Filter/PaginationAdminQuery.php',
    'Jobs\Repository\Filter\PaginationQuery'                            => __DIR__ . '/Jobs/Repository/Filter/PaginationQuery.php',
    'Jobs\Repository\Job'                                               => __DIR__ . '/Jobs/Repository/Job.php',
    'Jobs\Repository\JobSnapshotMeta'                                   => __DIR__ . '/Jobs/Repository/JobSnapshotMeta.php',
    'Jobs\View\Helper\AdminEditLink'                                    => __DIR__ . '/Jobs/View/Helper/AdminEditLink.php',
    'Jobs\View\Helper\ApplyButtons'                                     => __DIR__ . '/Jobs/View/Helper/ApplyButtons.php',
    'Jobs\View\Helper\ApplyUrl'                                         => __DIR__ . '/Jobs/View/Helper/ApplyUrl.php',
    'Jobs\View\Helper\JobUrl'                                           => __DIR__ . '/Jobs/View/Helper/JobUrl.php',
);
