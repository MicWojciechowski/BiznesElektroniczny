<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class Ps_checkout7505AdminContainer extends Container
{
    private $parameters = [];
    private $targetDirs = [];

    public function __construct()
    {
        $this->services = [];
        $this->normalizedIds = [
            'monolog\\handler\\handlerinterface' => 'Monolog\\Handler\\HandlerInterface',
            'prestashop\\modulelibcachedirectoryprovider\\cache\\cachedirectoryprovider' => 'PrestaShop\\ModuleLibCacheDirectoryProvider\\Cache\\CacheDirectoryProvider',
            'prestashop\\psaccountsinstaller\\installer\\facade\\psaccounts' => 'PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts',
            'prestashop\\psaccountsinstaller\\installer\\installer' => 'PrestaShop\\PsAccountsInstaller\\Installer\\Installer',
            'pscheckout\\api\\http\\checkouthttpclient' => 'PsCheckout\\Api\\Http\\CheckoutHttpClient',
            'pscheckout\\api\\http\\configuration\\checkoutclientconfigurationbuilder' => 'PsCheckout\\Api\\Http\\Configuration\\CheckoutClientConfigurationBuilder',
            'pscheckout\\api\\http\\configuration\\orderhttpclientconfigurationbuilder' => 'PsCheckout\\Api\\Http\\Configuration\\OrderHttpClientConfigurationBuilder',
            'pscheckout\\api\\http\\configuration\\ordershipmenttrackingconfigurationbuilder' => 'PsCheckout\\Api\\Http\\Configuration\\OrderShipmentTrackingConfigurationBuilder',
            'pscheckout\\api\\http\\orderhttpclient' => 'PsCheckout\\Api\\Http\\OrderHttpClient',
            'pscheckout\\api\\http\\ordershipmenttrackinghttpclient' => 'PsCheckout\\Api\\Http\\OrderShipmentTrackingHttpClient',
            'pscheckout\\cache\\array\\paypalorder' => 'PsCheckout\\Cache\\Array\\PayPalOrder',
            'pscheckout\\cache\\array\\shippingtracking' => 'PsCheckout\\Cache\\Array\\ShippingTracking',
            'pscheckout\\cache\\filesystem\\paypalorder' => 'PsCheckout\\Cache\\FileSystem\\PayPalOrder',
            'pscheckout\\cache\\filesystem\\shippingtracking' => 'PsCheckout\\Cache\\FileSystem\\ShippingTracking',
            'pscheckout\\core\\fundingsource\\factory\\fundingsourcetokenfactory' => 'PsCheckout\\Core\\FundingSource\\Factory\\FundingSourceTokenFactory',
            'pscheckout\\core\\order\\builder\\node\\amountbreakdownnode' => 'PsCheckout\\Core\\Order\\Builder\\Node\\AmountBreakdownNode',
            'pscheckout\\core\\order\\builder\\node\\applicationcontextnodebuilder' => 'PsCheckout\\Core\\Order\\Builder\\Node\\ApplicationContextNodeBuilder',
            'pscheckout\\core\\order\\builder\\node\\basenodebuilder' => 'PsCheckout\\Core\\Order\\Builder\\Node\\BaseNodeBuilder',
            'pscheckout\\core\\order\\builder\\node\\cardpaymentsourcenodebuilder' => 'PsCheckout\\Core\\Order\\Builder\\Node\\CardPaymentSourceNodeBuilder',
            'pscheckout\\core\\order\\builder\\node\\googlepaypaymentsourcenodebuilder' => 'PsCheckout\\Core\\Order\\Builder\\Node\\GooglePayPaymentSourceNodeBuilder',
            'pscheckout\\core\\order\\builder\\node\\payernodebuilder' => 'PsCheckout\\Core\\Order\\Builder\\Node\\PayerNodeBuilder',
            'pscheckout\\core\\order\\builder\\node\\paypalpaymentsourcenodebuilder' => 'PsCheckout\\Core\\Order\\Builder\\Node\\PayPalPaymentSourceNodeBuilder',
            'pscheckout\\core\\order\\builder\\node\\shippingnodebuilder' => 'PsCheckout\\Core\\Order\\Builder\\Node\\ShippingNodeBuilder',
            'pscheckout\\core\\order\\builder\\node\\supplementarydatanodebuilder' => 'PsCheckout\\Core\\Order\\Builder\\Node\\SupplementaryDataNodeBuilder',
            'pscheckout\\core\\order\\builder\\orderpayloadbuilder' => 'PsCheckout\\Core\\Order\\Builder\\OrderPayloadBuilder',
            'pscheckout\\core\\orderstate\\action\\changeorderstateaction' => 'PsCheckout\\Core\\OrderState\\Action\\ChangeOrderStateAction',
            'pscheckout\\core\\orderstate\\action\\setrefundedorderstateaction' => 'PsCheckout\\Core\\OrderState\\Action\\SetRefundedOrderStateAction',
            'pscheckout\\core\\orderstate\\service\\orderstatemapper' => 'PsCheckout\\Core\\OrderState\\Service\\OrderStateMapper',
            'pscheckout\\core\\paymenttoken\\action\\deletepaymenttokenaction' => 'PsCheckout\\Core\\PaymentToken\\Action\\DeletePaymentTokenAction',
            'pscheckout\\core\\paypal\\card3dsecure\\card3dsecurevalidator' => 'PsCheckout\\Core\\PayPal\\Card3DSecure\\Card3DSecureValidator',
            'pscheckout\\core\\paypal\\order\\action\\refundpaypalorderaction' => 'PsCheckout\\Core\\PayPal\\Order\\Action\\RefundPayPalOrderAction',
            'pscheckout\\core\\paypal\\order\\action\\updatepaypalorderpurchaseunitaction' => 'PsCheckout\\Core\\PayPal\\Order\\Action\\UpdatePayPalOrderPurchaseUnitAction',
            'pscheckout\\core\\paypal\\order\\cache\\paypalordercache' => 'PsCheckout\\Core\\PayPal\\Order\\Cache\\PayPalOrderCache',
            'pscheckout\\core\\paypal\\order\\provider\\paypalorderprovider' => 'PsCheckout\\Core\\PayPal\\Order\\Provider\\PayPalOrderProvider',
            'pscheckout\\core\\paypal\\orderstatus\\action\\paypalcheckorderstatusaction' => 'PsCheckout\\Core\\PayPal\\OrderStatus\\Action\\PayPalCheckOrderStatusAction',
            'pscheckout\\core\\paypal\\refund\\provider\\paypalrefundorderprovider' => 'PsCheckout\\Core\\PayPal\\Refund\\Provider\\PayPalRefundOrderProvider',
            'pscheckout\\core\\paypal\\shippingtracking\\action\\addtrackingaction' => 'PsCheckout\\Core\\PayPal\\ShippingTracking\\Action\\AddTrackingAction',
            'pscheckout\\core\\paypal\\shippingtracking\\action\\addtrackingactioninterface' => 'PsCheckout\\Core\\PayPal\\ShippingTracking\\Action\\AddTrackingActionInterface',
            'pscheckout\\core\\paypal\\shippingtracking\\action\\processexternalshipmentaction' => 'PsCheckout\\Core\\PayPal\\ShippingTracking\\Action\\ProcessExternalShipmentAction',
            'pscheckout\\core\\paypal\\shippingtracking\\builder\\node\\trackingbasenodebuilder' => 'PsCheckout\\Core\\PayPal\\ShippingTracking\\Builder\\Node\\TrackingBaseNodeBuilder',
            'pscheckout\\core\\paypal\\shippingtracking\\builder\\node\\trackingcarriermodulenodebuilder' => 'PsCheckout\\Core\\PayPal\\ShippingTracking\\Builder\\Node\\TrackingCarrierModuleNodeBuilder',
            'pscheckout\\core\\paypal\\shippingtracking\\builder\\node\\trackingitemsnodebuilder' => 'PsCheckout\\Core\\PayPal\\ShippingTracking\\Builder\\Node\\TrackingItemsNodeBuilder',
            'pscheckout\\core\\paypal\\shippingtracking\\builder\\trackingpayloadbuilder' => 'PsCheckout\\Core\\PayPal\\ShippingTracking\\Builder\\TrackingPayloadBuilder',
            'pscheckout\\core\\paypal\\shippingtracking\\cache\\shippingtrackingcache' => 'PsCheckout\\Core\\PayPal\\ShippingTracking\\Cache\\ShippingTrackingCache',
            'pscheckout\\core\\paypal\\shippingtracking\\processor\\externalshipmentprocessor' => 'PsCheckout\\Core\\PayPal\\ShippingTracking\\Processor\\ExternalShipmentProcessor',
            'pscheckout\\core\\paypal\\shippingtracking\\processor\\shipmentprocessor' => 'PsCheckout\\Core\\PayPal\\ShippingTracking\\Processor\\ShipmentProcessor',
            'pscheckout\\core\\paypal\\shippingtracking\\processor\\shipmentprocessorinterface' => 'PsCheckout\\Core\\PayPal\\ShippingTracking\\Processor\\ShipmentProcessorInterface',
            'pscheckout\\core\\paypal\\shippingtracking\\service\\trackingapiservice' => 'PsCheckout\\Core\\PayPal\\ShippingTracking\\Service\\TrackingApiService',
            'pscheckout\\core\\paypal\\shippingtracking\\service\\trackingdatabasehandler' => 'PsCheckout\\Core\\PayPal\\ShippingTracking\\Service\\TrackingDatabaseHandler',
            'pscheckout\\core\\paypal\\shippingtracking\\validator\\ordertrackervalidator' => 'PsCheckout\\Core\\PayPal\\ShippingTracking\\Validator\\OrderTrackerValidator',
            'pscheckout\\core\\settings\\configuration\\paypalconfiguration' => 'PsCheckout\\Core\\Settings\\Configuration\\PayPalConfiguration',
            'pscheckout\\core\\webhook\\service\\webhooksecrettoken' => 'PsCheckout\\Core\\Webhook\\Service\\WebhookSecretToken',
            'pscheckout\\infrastructure\\action\\savebatchconfigurationactioninterface' => 'PsCheckout\\Infrastructure\\Action\\SaveBatchConfigurationActionInterface',
            'pscheckout\\infrastructure\\adapter\\address' => 'PsCheckout\\Infrastructure\\Adapter\\Address',
            'pscheckout\\infrastructure\\adapter\\cart' => 'PsCheckout\\Infrastructure\\Adapter\\Cart',
            'pscheckout\\infrastructure\\adapter\\configuration' => 'PsCheckout\\Infrastructure\\Adapter\\Configuration',
            'pscheckout\\infrastructure\\adapter\\context' => 'PsCheckout\\Infrastructure\\Adapter\\Context',
            'pscheckout\\infrastructure\\adapter\\country' => 'PsCheckout\\Infrastructure\\Adapter\\Country',
            'pscheckout\\infrastructure\\adapter\\currency' => 'PsCheckout\\Infrastructure\\Adapter\\Currency',
            'pscheckout\\infrastructure\\adapter\\customer' => 'PsCheckout\\Infrastructure\\Adapter\\Customer',
            'pscheckout\\infrastructure\\adapter\\language' => 'PsCheckout\\Infrastructure\\Adapter\\Language',
            'pscheckout\\infrastructure\\adapter\\link' => 'PsCheckout\\Infrastructure\\Adapter\\Link',
            'pscheckout\\infrastructure\\adapter\\shopcontext' => 'PsCheckout\\Infrastructure\\Adapter\\ShopContext',
            'pscheckout\\infrastructure\\adapter\\systemconfiguration' => 'PsCheckout\\Infrastructure\\Adapter\\SystemConfiguration',
            'pscheckout\\infrastructure\\adapter\\tools' => 'PsCheckout\\Infrastructure\\Adapter\\Tools',
            'pscheckout\\infrastructure\\adapter\\validate' => 'PsCheckout\\Infrastructure\\Adapter\\Validate',
            'pscheckout\\infrastructure\\bootstrap\\install\\appleinstaller' => 'PsCheckout\\Infrastructure\\Bootstrap\\Install\\AppleInstaller',
            'pscheckout\\infrastructure\\bootstrap\\install\\compatibilityrulesinstaller' => 'PsCheckout\\Infrastructure\\Bootstrap\\Install\\CompatibilityRulesInstaller',
            'pscheckout\\infrastructure\\bootstrap\\install\\configurationinstaller' => 'PsCheckout\\Infrastructure\\Bootstrap\\Install\\ConfigurationInstaller',
            'pscheckout\\infrastructure\\bootstrap\\install\\databasetableinstaller' => 'PsCheckout\\Infrastructure\\Bootstrap\\Install\\DatabaseTableInstaller',
            'pscheckout\\infrastructure\\bootstrap\\install\\fundingsourceinstaller' => 'PsCheckout\\Infrastructure\\Bootstrap\\Install\\FundingSourceInstaller',
            'pscheckout\\infrastructure\\bootstrap\\install\\installer' => 'PsCheckout\\Infrastructure\\Bootstrap\\Install\\Installer',
            'pscheckout\\infrastructure\\bootstrap\\install\\orderstateinstaller' => 'PsCheckout\\Infrastructure\\Bootstrap\\Install\\OrderStateInstaller',
            'pscheckout\\infrastructure\\environment\\env' => 'PsCheckout\\Infrastructure\\Environment\\Env',
            'pscheckout\\infrastructure\\environment\\envloader' => 'PsCheckout\\Infrastructure\\Environment\\EnvLoader',
            'pscheckout\\infrastructure\\logger\\loggerfactory' => 'PsCheckout\\Infrastructure\\Logger\\LoggerFactory',
            'pscheckout\\infrastructure\\logger\\loggerfilefinder' => 'PsCheckout\\Infrastructure\\Logger\\LoggerFileFinder',
            'pscheckout\\infrastructure\\logger\\loggerfilereader' => 'PsCheckout\\Infrastructure\\Logger\\LoggerFileReader',
            'pscheckout\\infrastructure\\logger\\loggerhandlerfactory' => 'PsCheckout\\Infrastructure\\Logger\\LoggerHandlerFactory',
            'pscheckout\\infrastructure\\repository\\addressrepository' => 'PsCheckout\\Infrastructure\\Repository\\AddressRepository',
            'pscheckout\\infrastructure\\repository\\cartrepository' => 'PsCheckout\\Infrastructure\\Repository\\CartRepository',
            'pscheckout\\infrastructure\\repository\\configurationrepository' => 'PsCheckout\\Infrastructure\\Repository\\ConfigurationRepository',
            'pscheckout\\infrastructure\\repository\\countryrepository' => 'PsCheckout\\Infrastructure\\Repository\\CountryRepository',
            'pscheckout\\infrastructure\\repository\\currencyrepository' => 'PsCheckout\\Infrastructure\\Repository\\CurrencyRepository',
            'pscheckout\\infrastructure\\repository\\customerrepository' => 'PsCheckout\\Infrastructure\\Repository\\CustomerRepository',
            'pscheckout\\infrastructure\\repository\\fundingsourcerepository' => 'PsCheckout\\Infrastructure\\Repository\\FundingSourceRepository',
            'pscheckout\\infrastructure\\repository\\genderrepository' => 'PsCheckout\\Infrastructure\\Repository\\GenderRepository',
            'pscheckout\\infrastructure\\repository\\languagerepository' => 'PsCheckout\\Infrastructure\\Repository\\LanguageRepository',
            'pscheckout\\infrastructure\\repository\\orderhistoryrepository' => 'PsCheckout\\Infrastructure\\Repository\\OrderHistoryRepository',
            'pscheckout\\infrastructure\\repository\\orderrepository' => 'PsCheckout\\Infrastructure\\Repository\\OrderRepository',
            'pscheckout\\infrastructure\\repository\\orderstaterepository' => 'PsCheckout\\Infrastructure\\Repository\\OrderStateRepository',
            'pscheckout\\infrastructure\\repository\\paymenttokenrepository' => 'PsCheckout\\Infrastructure\\Repository\\PaymentTokenRepository',
            'pscheckout\\infrastructure\\repository\\paypalcustomerrepository' => 'PsCheckout\\Infrastructure\\Repository\\PayPalCustomerRepository',
            'pscheckout\\infrastructure\\repository\\paypalorderauthorizationrepository' => 'PsCheckout\\Infrastructure\\Repository\\PayPalOrderAuthorizationRepository',
            'pscheckout\\infrastructure\\repository\\paypalordercapturerepository' => 'PsCheckout\\Infrastructure\\Repository\\PayPalOrderCaptureRepository',
            'pscheckout\\infrastructure\\repository\\paypalordermatrixrepository' => 'PsCheckout\\Infrastructure\\Repository\\PayPalOrderMatrixRepository',
            'pscheckout\\infrastructure\\repository\\paypalorderpurchaseunitrepository' => 'PsCheckout\\Infrastructure\\Repository\\PayPalOrderPurchaseUnitRepository',
            'pscheckout\\infrastructure\\repository\\paypalorderrefundrepository' => 'PsCheckout\\Infrastructure\\Repository\\PayPalOrderRefundRepository',
            'pscheckout\\infrastructure\\repository\\paypalorderrepository' => 'PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository',
            'pscheckout\\infrastructure\\repository\\psaccountrepository' => 'PsCheckout\\Infrastructure\\Repository\\PsAccountRepository',
            'pscheckout\\infrastructure\\repository\\shippingtrackingrepository' => 'PsCheckout\\Infrastructure\\Repository\\ShippingTrackingRepository',
            'pscheckout\\infrastructure\\repository\\shoprepository' => 'PsCheckout\\Infrastructure\\Repository\\ShopRepository',
            'pscheckout\\infrastructure\\repository\\staterepository' => 'PsCheckout\\Infrastructure\\Repository\\StateRepository',
            'pscheckout\\infrastructure\\validator\\merchantvalidator' => 'PsCheckout\\Infrastructure\\Validator\\MerchantValidator',
            'pscheckout\\module\\presentation\\translator' => 'PsCheckout\\Module\\Presentation\\Translator',
            'pscheckout\\presentation\\presenter\\date\\datepresenter' => 'PsCheckout\\Presentation\\Presenter\\Date\\DatePresenter',
            'pscheckout\\presentation\\presenter\\fundingsource\\fundingsourcepresenter' => 'PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourcePresenter',
            'pscheckout\\presentation\\presenter\\fundingsource\\fundingsourcetokenpresenter' => 'PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourceTokenPresenter',
            'pscheckout\\presentation\\presenter\\fundingsource\\fundingsourcetranslationprovider' => 'PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourceTranslationProvider',
            'pscheckout\\presentation\\presenter\\fundingsource\\logopresenter' => 'PsCheckout\\Presentation\\Presenter\\FundingSource\\LogoPresenter',
            'pscheckout\\presentation\\presenter\\paypalorder\\paypalorderpresenter' => 'PsCheckout\\Presentation\\Presenter\\PayPalOrder\\PayPalOrderPresenter',
            'pscheckout\\presentation\\presenter\\paypalorder\\paypalordertotalspresenter' => 'PsCheckout\\Presentation\\Presenter\\PayPalOrder\\PayPalOrderTotalsPresenter',
            'pscheckout\\presentation\\presenter\\paypalorder\\paypalordertransactionpresenter' => 'PsCheckout\\Presentation\\Presenter\\PayPalOrder\\PayPalOrderTransactionPresenter',
            'pscheckout\\presentation\\presenter\\settings\\admin\\adminsettingspresenter' => 'PsCheckout\\Presentation\\Presenter\\Settings\\Admin\\AdminSettingsPresenter',
            'pscheckout\\presentation\\presenter\\settings\\admin\\modules\\configurationmodule' => 'PsCheckout\\Presentation\\Presenter\\Settings\\Admin\\Modules\\ConfigurationModule',
            'pscheckout\\presentation\\presenter\\settings\\admin\\modules\\contextmodule' => 'PsCheckout\\Presentation\\Presenter\\Settings\\Admin\\Modules\\ContextModule',
            'pscheckout\\presentation\\presenter\\settings\\admin\\modules\\paypalmodule' => 'PsCheckout\\Presentation\\Presenter\\Settings\\Admin\\Modules\\PaypalModule',
            'pscheckout\\utility\\common\\inputstreamutility' => 'PsCheckout\\Utility\\Common\\InputStreamUtility',
            'psr\\log\\loggerinterface' => 'Psr\\Log\\LoggerInterface',
        ];
        $this->methodMap = [
            'Monolog\\Handler\\HandlerInterface' => 'getHandlerInterfaceService',
            'PrestaShop\\ModuleLibCacheDirectoryProvider\\Cache\\CacheDirectoryProvider' => 'getCacheDirectoryProviderService',
            'PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts' => 'getPsAccountsService',
            'PrestaShop\\PsAccountsInstaller\\Installer\\Installer' => 'getInstallerService',
            'PsCheckout\\Api\\Http\\CheckoutHttpClient' => 'getCheckoutHttpClientService',
            'PsCheckout\\Api\\Http\\Configuration\\CheckoutClientConfigurationBuilder' => 'getCheckoutClientConfigurationBuilderService',
            'PsCheckout\\Api\\Http\\Configuration\\OrderHttpClientConfigurationBuilder' => 'getOrderHttpClientConfigurationBuilderService',
            'PsCheckout\\Api\\Http\\Configuration\\OrderShipmentTrackingConfigurationBuilder' => 'getOrderShipmentTrackingConfigurationBuilderService',
            'PsCheckout\\Api\\Http\\OrderHttpClient' => 'getOrderHttpClientService',
            'PsCheckout\\Api\\Http\\OrderShipmentTrackingHttpClient' => 'getOrderShipmentTrackingHttpClientService',
            'PsCheckout\\Cache\\Array\\PayPalOrder' => 'getPayPalOrderService',
            'PsCheckout\\Cache\\Array\\ShippingTracking' => 'getShippingTrackingService',
            'PsCheckout\\Cache\\FileSystem\\PayPalOrder' => 'getPayPalOrder2Service',
            'PsCheckout\\Cache\\FileSystem\\ShippingTracking' => 'getShippingTracking2Service',
            'PsCheckout\\Core\\FundingSource\\Factory\\FundingSourceTokenFactory' => 'getFundingSourceTokenFactoryService',
            'PsCheckout\\Core\\OrderState\\Action\\ChangeOrderStateAction' => 'getChangeOrderStateActionService',
            'PsCheckout\\Core\\OrderState\\Action\\SetRefundedOrderStateAction' => 'getSetRefundedOrderStateActionService',
            'PsCheckout\\Core\\OrderState\\Service\\OrderStateMapper' => 'getOrderStateMapperService',
            'PsCheckout\\Core\\Order\\Builder\\Node\\AmountBreakdownNode' => 'getAmountBreakdownNodeService',
            'PsCheckout\\Core\\Order\\Builder\\Node\\ApplicationContextNodeBuilder' => 'getApplicationContextNodeBuilderService',
            'PsCheckout\\Core\\Order\\Builder\\Node\\BaseNodeBuilder' => 'getBaseNodeBuilderService',
            'PsCheckout\\Core\\Order\\Builder\\Node\\CardPaymentSourceNodeBuilder' => 'getCardPaymentSourceNodeBuilderService',
            'PsCheckout\\Core\\Order\\Builder\\Node\\GooglePayPaymentSourceNodeBuilder' => 'getGooglePayPaymentSourceNodeBuilderService',
            'PsCheckout\\Core\\Order\\Builder\\Node\\PayPalPaymentSourceNodeBuilder' => 'getPayPalPaymentSourceNodeBuilderService',
            'PsCheckout\\Core\\Order\\Builder\\Node\\PayerNodeBuilder' => 'getPayerNodeBuilderService',
            'PsCheckout\\Core\\Order\\Builder\\Node\\ShippingNodeBuilder' => 'getShippingNodeBuilderService',
            'PsCheckout\\Core\\Order\\Builder\\Node\\SupplementaryDataNodeBuilder' => 'getSupplementaryDataNodeBuilderService',
            'PsCheckout\\Core\\Order\\Builder\\OrderPayloadBuilder' => 'getOrderPayloadBuilderService',
            'PsCheckout\\Core\\PayPal\\Card3DSecure\\Card3DSecureValidator' => 'getCard3DSecureValidatorService',
            'PsCheckout\\Core\\PayPal\\OrderStatus\\Action\\PayPalCheckOrderStatusAction' => 'getPayPalCheckOrderStatusActionService',
            'PsCheckout\\Core\\PayPal\\Order\\Action\\RefundPayPalOrderAction' => 'getRefundPayPalOrderActionService',
            'PsCheckout\\Core\\PayPal\\Order\\Action\\UpdatePayPalOrderPurchaseUnitAction' => 'getUpdatePayPalOrderPurchaseUnitActionService',
            'PsCheckout\\Core\\PayPal\\Order\\Cache\\PayPalOrderCache' => 'getPayPalOrderCacheService',
            'PsCheckout\\Core\\PayPal\\Order\\Provider\\PayPalOrderProvider' => 'getPayPalOrderProviderService',
            'PsCheckout\\Core\\PayPal\\Refund\\Provider\\PayPalRefundOrderProvider' => 'getPayPalRefundOrderProviderService',
            'PsCheckout\\Core\\PayPal\\ShippingTracking\\Action\\AddTrackingAction' => 'getAddTrackingActionService',
            'PsCheckout\\Core\\PayPal\\ShippingTracking\\Action\\AddTrackingActionInterface' => 'getAddTrackingActionInterfaceService',
            'PsCheckout\\Core\\PayPal\\ShippingTracking\\Action\\ProcessExternalShipmentAction' => 'getProcessExternalShipmentActionService',
            'PsCheckout\\Core\\PayPal\\ShippingTracking\\Builder\\Node\\TrackingBaseNodeBuilder' => 'getTrackingBaseNodeBuilderService',
            'PsCheckout\\Core\\PayPal\\ShippingTracking\\Builder\\Node\\TrackingCarrierModuleNodeBuilder' => 'getTrackingCarrierModuleNodeBuilderService',
            'PsCheckout\\Core\\PayPal\\ShippingTracking\\Builder\\Node\\TrackingItemsNodeBuilder' => 'getTrackingItemsNodeBuilderService',
            'PsCheckout\\Core\\PayPal\\ShippingTracking\\Builder\\TrackingPayloadBuilder' => 'getTrackingPayloadBuilderService',
            'PsCheckout\\Core\\PayPal\\ShippingTracking\\Cache\\ShippingTrackingCache' => 'getShippingTrackingCacheService',
            'PsCheckout\\Core\\PayPal\\ShippingTracking\\Processor\\ExternalShipmentProcessor' => 'getExternalShipmentProcessorService',
            'PsCheckout\\Core\\PayPal\\ShippingTracking\\Processor\\ShipmentProcessor' => 'getShipmentProcessorService',
            'PsCheckout\\Core\\PayPal\\ShippingTracking\\Processor\\ShipmentProcessorInterface' => 'getShipmentProcessorInterfaceService',
            'PsCheckout\\Core\\PayPal\\ShippingTracking\\Service\\TrackingApiService' => 'getTrackingApiServiceService',
            'PsCheckout\\Core\\PayPal\\ShippingTracking\\Service\\TrackingDatabaseHandler' => 'getTrackingDatabaseHandlerService',
            'PsCheckout\\Core\\PayPal\\ShippingTracking\\Validator\\OrderTrackerValidator' => 'getOrderTrackerValidatorService',
            'PsCheckout\\Core\\PaymentToken\\Action\\DeletePaymentTokenAction' => 'getDeletePaymentTokenActionService',
            'PsCheckout\\Core\\Settings\\Configuration\\PayPalConfiguration' => 'getPayPalConfigurationService',
            'PsCheckout\\Core\\Webhook\\Service\\WebhookSecretToken' => 'getWebhookSecretTokenService',
            'PsCheckout\\Infrastructure\\Action\\SaveBatchConfigurationActionInterface' => 'getSaveBatchConfigurationActionInterfaceService',
            'PsCheckout\\Infrastructure\\Adapter\\Address' => 'getAddressService',
            'PsCheckout\\Infrastructure\\Adapter\\Cart' => 'getCartService',
            'PsCheckout\\Infrastructure\\Adapter\\Configuration' => 'getConfigurationService',
            'PsCheckout\\Infrastructure\\Adapter\\Context' => 'getContextService',
            'PsCheckout\\Infrastructure\\Adapter\\Country' => 'getCountryService',
            'PsCheckout\\Infrastructure\\Adapter\\Currency' => 'getCurrencyService',
            'PsCheckout\\Infrastructure\\Adapter\\Customer' => 'getCustomerService',
            'PsCheckout\\Infrastructure\\Adapter\\Language' => 'getLanguageService',
            'PsCheckout\\Infrastructure\\Adapter\\Link' => 'getLinkService',
            'PsCheckout\\Infrastructure\\Adapter\\ShopContext' => 'getShopContextService',
            'PsCheckout\\Infrastructure\\Adapter\\SystemConfiguration' => 'getSystemConfigurationService',
            'PsCheckout\\Infrastructure\\Adapter\\Tools' => 'getToolsService',
            'PsCheckout\\Infrastructure\\Adapter\\Validate' => 'getValidateService',
            'PsCheckout\\Infrastructure\\Bootstrap\\Install\\AppleInstaller' => 'getAppleInstallerService',
            'PsCheckout\\Infrastructure\\Bootstrap\\Install\\CompatibilityRulesInstaller' => 'getCompatibilityRulesInstallerService',
            'PsCheckout\\Infrastructure\\Bootstrap\\Install\\ConfigurationInstaller' => 'getConfigurationInstallerService',
            'PsCheckout\\Infrastructure\\Bootstrap\\Install\\DatabaseTableInstaller' => 'getDatabaseTableInstallerService',
            'PsCheckout\\Infrastructure\\Bootstrap\\Install\\FundingSourceInstaller' => 'getFundingSourceInstallerService',
            'PsCheckout\\Infrastructure\\Bootstrap\\Install\\Installer' => 'getInstaller2Service',
            'PsCheckout\\Infrastructure\\Bootstrap\\Install\\OrderStateInstaller' => 'getOrderStateInstallerService',
            'PsCheckout\\Infrastructure\\Environment\\Env' => 'getEnvService',
            'PsCheckout\\Infrastructure\\Environment\\EnvLoader' => 'getEnvLoaderService',
            'PsCheckout\\Infrastructure\\Logger\\LoggerFactory' => 'getLoggerFactoryService',
            'PsCheckout\\Infrastructure\\Logger\\LoggerFileFinder' => 'getLoggerFileFinderService',
            'PsCheckout\\Infrastructure\\Logger\\LoggerFileReader' => 'getLoggerFileReaderService',
            'PsCheckout\\Infrastructure\\Logger\\LoggerHandlerFactory' => 'getLoggerHandlerFactoryService',
            'PsCheckout\\Infrastructure\\Repository\\AddressRepository' => 'getAddressRepositoryService',
            'PsCheckout\\Infrastructure\\Repository\\CartRepository' => 'getCartRepositoryService',
            'PsCheckout\\Infrastructure\\Repository\\ConfigurationRepository' => 'getConfigurationRepositoryService',
            'PsCheckout\\Infrastructure\\Repository\\CountryRepository' => 'getCountryRepositoryService',
            'PsCheckout\\Infrastructure\\Repository\\CurrencyRepository' => 'getCurrencyRepositoryService',
            'PsCheckout\\Infrastructure\\Repository\\CustomerRepository' => 'getCustomerRepositoryService',
            'PsCheckout\\Infrastructure\\Repository\\FundingSourceRepository' => 'getFundingSourceRepositoryService',
            'PsCheckout\\Infrastructure\\Repository\\GenderRepository' => 'getGenderRepositoryService',
            'PsCheckout\\Infrastructure\\Repository\\LanguageRepository' => 'getLanguageRepositoryService',
            'PsCheckout\\Infrastructure\\Repository\\OrderHistoryRepository' => 'getOrderHistoryRepositoryService',
            'PsCheckout\\Infrastructure\\Repository\\OrderRepository' => 'getOrderRepositoryService',
            'PsCheckout\\Infrastructure\\Repository\\OrderStateRepository' => 'getOrderStateRepositoryService',
            'PsCheckout\\Infrastructure\\Repository\\PayPalCustomerRepository' => 'getPayPalCustomerRepositoryService',
            'PsCheckout\\Infrastructure\\Repository\\PayPalOrderAuthorizationRepository' => 'getPayPalOrderAuthorizationRepositoryService',
            'PsCheckout\\Infrastructure\\Repository\\PayPalOrderCaptureRepository' => 'getPayPalOrderCaptureRepositoryService',
            'PsCheckout\\Infrastructure\\Repository\\PayPalOrderMatrixRepository' => 'getPayPalOrderMatrixRepositoryService',
            'PsCheckout\\Infrastructure\\Repository\\PayPalOrderPurchaseUnitRepository' => 'getPayPalOrderPurchaseUnitRepositoryService',
            'PsCheckout\\Infrastructure\\Repository\\PayPalOrderRefundRepository' => 'getPayPalOrderRefundRepositoryService',
            'PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository' => 'getPayPalOrderRepositoryService',
            'PsCheckout\\Infrastructure\\Repository\\PaymentTokenRepository' => 'getPaymentTokenRepositoryService',
            'PsCheckout\\Infrastructure\\Repository\\PsAccountRepository' => 'getPsAccountRepositoryService',
            'PsCheckout\\Infrastructure\\Repository\\ShippingTrackingRepository' => 'getShippingTrackingRepositoryService',
            'PsCheckout\\Infrastructure\\Repository\\ShopRepository' => 'getShopRepositoryService',
            'PsCheckout\\Infrastructure\\Repository\\StateRepository' => 'getStateRepositoryService',
            'PsCheckout\\Infrastructure\\Validator\\MerchantValidator' => 'getMerchantValidatorService',
            'PsCheckout\\Module\\Presentation\\Translator' => 'getTranslatorService',
            'PsCheckout\\Presentation\\Presenter\\Date\\DatePresenter' => 'getDatePresenterService',
            'PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourcePresenter' => 'getFundingSourcePresenterService',
            'PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourceTokenPresenter' => 'getFundingSourceTokenPresenterService',
            'PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourceTranslationProvider' => 'getFundingSourceTranslationProviderService',
            'PsCheckout\\Presentation\\Presenter\\FundingSource\\LogoPresenter' => 'getLogoPresenterService',
            'PsCheckout\\Presentation\\Presenter\\PayPalOrder\\PayPalOrderPresenter' => 'getPayPalOrderPresenterService',
            'PsCheckout\\Presentation\\Presenter\\PayPalOrder\\PayPalOrderTotalsPresenter' => 'getPayPalOrderTotalsPresenterService',
            'PsCheckout\\Presentation\\Presenter\\PayPalOrder\\PayPalOrderTransactionPresenter' => 'getPayPalOrderTransactionPresenterService',
            'PsCheckout\\Presentation\\Presenter\\Settings\\Admin\\AdminSettingsPresenter' => 'getAdminSettingsPresenterService',
            'PsCheckout\\Presentation\\Presenter\\Settings\\Admin\\Modules\\ConfigurationModule' => 'getConfigurationModuleService',
            'PsCheckout\\Presentation\\Presenter\\Settings\\Admin\\Modules\\ContextModule' => 'getContextModuleService',
            'PsCheckout\\Presentation\\Presenter\\Settings\\Admin\\Modules\\PaypalModule' => 'getPaypalModuleService',
            'PsCheckout\\Utility\\Common\\InputStreamUtility' => 'getInputStreamUtilityService',
            'Psr\\Log\\LoggerInterface' => 'getLoggerInterfaceService',
            'ps_checkout.db' => 'getPsCheckout_DbService',
            'ps_checkout.module' => 'getPsCheckout_ModuleService',
        ];

        $this->aliases = [];
    }

    public function getRemovedIds()
    {
        return [
            'Psr\\Container\\ContainerInterface' => true,
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => true,
        ];
    }

    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled()
    {
        return true;
    }

    public function isFrozen()
    {
        @trigger_error(sprintf('The %s() method is deprecated since Symfony 3.3 and will be removed in 4.0. Use the isCompiled() method instead.', __METHOD__), E_USER_DEPRECATED);

        return true;
    }

    /**
     * Gets the public 'Monolog\Handler\HandlerInterface' shared service.
     *
     * @return \Monolog\Handler\HandlerInterface
     */
    protected function getHandlerInterfaceService()
    {
        return $this->services['Monolog\\Handler\\HandlerInterface'] = ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Logger\\LoggerHandlerFactory']) ? $this->services['PsCheckout\\Infrastructure\\Logger\\LoggerHandlerFactory'] : $this->getLoggerHandlerFactoryService()) && false ?: '_'}->build();
    }

    /**
     * Gets the public 'PrestaShop\ModuleLibCacheDirectoryProvider\Cache\CacheDirectoryProvider' shared service.
     *
     * @return \PrestaShop\ModuleLibCacheDirectoryProvider\Cache\CacheDirectoryProvider
     */
    protected function getCacheDirectoryProviderService()
    {
        return $this->services['PrestaShop\\ModuleLibCacheDirectoryProvider\\Cache\\CacheDirectoryProvider'] = new \PrestaShop\ModuleLibCacheDirectoryProvider\Cache\CacheDirectoryProvider('1.7.8.11', '/var/www/html', true);
    }

    /**
     * Gets the public 'PrestaShop\PsAccountsInstaller\Installer\Facade\PsAccounts' shared service.
     *
     * @return \PrestaShop\PsAccountsInstaller\Installer\Facade\PsAccounts
     */
    protected function getPsAccountsService()
    {
        return $this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts'] = new \PrestaShop\PsAccountsInstaller\Installer\Facade\PsAccounts(${($_ = isset($this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Installer']) ? $this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Installer'] : ($this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Installer'] = new \PrestaShop\PsAccountsInstaller\Installer\Installer('4.0.0'))) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\PsAccountsInstaller\Installer\Installer' shared service.
     *
     * @return \PrestaShop\PsAccountsInstaller\Installer\Installer
     */
    protected function getInstallerService()
    {
        return $this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Installer'] = new \PrestaShop\PsAccountsInstaller\Installer\Installer('4.0.0');
    }

    /**
     * Gets the public 'PsCheckout\Api\Http\CheckoutHttpClient' shared service.
     *
     * @return \PsCheckout\Api\Http\CheckoutHttpClient
     */
    protected function getCheckoutHttpClientService()
    {
        return $this->services['PsCheckout\\Api\\Http\\CheckoutHttpClient'] = new \PsCheckout\Api\Http\CheckoutHttpClient(${($_ = isset($this->services['PsCheckout\\Api\\Http\\Configuration\\CheckoutClientConfigurationBuilder']) ? $this->services['PsCheckout\\Api\\Http\\Configuration\\CheckoutClientConfigurationBuilder'] : $this->getCheckoutClientConfigurationBuilderService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Api\Http\Configuration\CheckoutClientConfigurationBuilder' shared service.
     *
     * @return \PsCheckout\Api\Http\Configuration\CheckoutClientConfigurationBuilder
     */
    protected function getCheckoutClientConfigurationBuilderService()
    {
        return $this->services['PsCheckout\\Api\\Http\\Configuration\\CheckoutClientConfigurationBuilder'] = new \PsCheckout\Api\Http\Configuration\CheckoutClientConfigurationBuilder(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->version, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Link']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Link'] : $this->getLinkService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Environment\\Env']) ? $this->services['PsCheckout\\Infrastructure\\Environment\\Env'] : $this->getEnvService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PsAccountRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PsAccountRepository'] : $this->getPsAccountRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['Psr\\Log\\LoggerInterface']) ? $this->services['Psr\\Log\\LoggerInterface'] : $this->getLoggerInterfaceService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Api\Http\Configuration\OrderHttpClientConfigurationBuilder' shared service.
     *
     * @return \PsCheckout\Api\Http\Configuration\OrderHttpClientConfigurationBuilder
     */
    protected function getOrderHttpClientConfigurationBuilderService()
    {
        return $this->services['PsCheckout\\Api\\Http\\Configuration\\OrderHttpClientConfigurationBuilder'] = new \PsCheckout\Api\Http\Configuration\OrderHttpClientConfigurationBuilder(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Environment\\Env']) ? $this->services['PsCheckout\\Infrastructure\\Environment\\Env'] : $this->getEnvService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PsAccountRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PsAccountRepository'] : $this->getPsAccountRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['Psr\\Log\\LoggerInterface']) ? $this->services['Psr\\Log\\LoggerInterface'] : $this->getLoggerInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Link']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Link'] : $this->getLinkService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->version);
    }

    /**
     * Gets the public 'PsCheckout\Api\Http\Configuration\OrderShipmentTrackingConfigurationBuilder' shared service.
     *
     * @return \PsCheckout\Api\Http\Configuration\OrderShipmentTrackingConfigurationBuilder
     */
    protected function getOrderShipmentTrackingConfigurationBuilderService()
    {
        return $this->services['PsCheckout\\Api\\Http\\Configuration\\OrderShipmentTrackingConfigurationBuilder'] = new \PsCheckout\Api\Http\Configuration\OrderShipmentTrackingConfigurationBuilder(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->version, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Link']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Link'] : $this->getLinkService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Environment\\Env']) ? $this->services['PsCheckout\\Infrastructure\\Environment\\Env'] : $this->getEnvService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PsAccountRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PsAccountRepository'] : $this->getPsAccountRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['Psr\\Log\\LoggerInterface']) ? $this->services['Psr\\Log\\LoggerInterface'] : $this->getLoggerInterfaceService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Api\Http\OrderHttpClient' shared service.
     *
     * @return \PsCheckout\Api\Http\OrderHttpClient
     */
    protected function getOrderHttpClientService()
    {
        return $this->services['PsCheckout\\Api\\Http\\OrderHttpClient'] = new \PsCheckout\Api\Http\OrderHttpClient(${($_ = isset($this->services['PsCheckout\\Api\\Http\\Configuration\\OrderHttpClientConfigurationBuilder']) ? $this->services['PsCheckout\\Api\\Http\\Configuration\\OrderHttpClientConfigurationBuilder'] : $this->getOrderHttpClientConfigurationBuilderService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Api\Http\OrderShipmentTrackingHttpClient' shared service.
     *
     * @return \PsCheckout\Api\Http\OrderShipmentTrackingHttpClient
     */
    protected function getOrderShipmentTrackingHttpClientService()
    {
        return $this->services['PsCheckout\\Api\\Http\\OrderShipmentTrackingHttpClient'] = new \PsCheckout\Api\Http\OrderShipmentTrackingHttpClient(${($_ = isset($this->services['PsCheckout\\Api\\Http\\Configuration\\OrderShipmentTrackingConfigurationBuilder']) ? $this->services['PsCheckout\\Api\\Http\\Configuration\\OrderShipmentTrackingConfigurationBuilder'] : $this->getOrderShipmentTrackingConfigurationBuilderService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Cache\Array\PayPalOrder' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\ArrayAdapter
     */
    protected function getPayPalOrderService()
    {
        return $this->services['PsCheckout\\Cache\\Array\\PayPalOrder'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter();
    }

    /**
     * Gets the public 'PsCheckout\Cache\Array\ShippingTracking' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\ArrayAdapter
     */
    protected function getShippingTrackingService()
    {
        return $this->services['PsCheckout\\Cache\\Array\\ShippingTracking'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter();
    }

    /**
     * Gets the public 'PsCheckout\Cache\FileSystem\PayPalOrder' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    protected function getPayPalOrder2Service()
    {
        return $this->services['PsCheckout\\Cache\\FileSystem\\PayPalOrder'] = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('paypal-orders', 3600, ${($_ = isset($this->services['PrestaShop\\ModuleLibCacheDirectoryProvider\\Cache\\CacheDirectoryProvider']) ? $this->services['PrestaShop\\ModuleLibCacheDirectoryProvider\\Cache\\CacheDirectoryProvider'] : ($this->services['PrestaShop\\ModuleLibCacheDirectoryProvider\\Cache\\CacheDirectoryProvider'] = new \PrestaShop\ModuleLibCacheDirectoryProvider\Cache\CacheDirectoryProvider('1.7.8.11', '/var/www/html', true))) && false ?: '_'}->getPath());
    }

    /**
     * Gets the public 'PsCheckout\Cache\FileSystem\ShippingTracking' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    protected function getShippingTracking2Service()
    {
        return $this->services['PsCheckout\\Cache\\FileSystem\\ShippingTracking'] = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('shipping-tracking', 3600, ${($_ = isset($this->services['PrestaShop\\ModuleLibCacheDirectoryProvider\\Cache\\CacheDirectoryProvider']) ? $this->services['PrestaShop\\ModuleLibCacheDirectoryProvider\\Cache\\CacheDirectoryProvider'] : ($this->services['PrestaShop\\ModuleLibCacheDirectoryProvider\\Cache\\CacheDirectoryProvider'] = new \PrestaShop\ModuleLibCacheDirectoryProvider\Cache\CacheDirectoryProvider('1.7.8.11', '/var/www/html', true))) && false ?: '_'}->getPath());
    }

    /**
     * Gets the public 'PsCheckout\Core\FundingSource\Factory\FundingSourceTokenFactory' shared service.
     *
     * @return \PsCheckout\Core\FundingSource\Factory\FundingSourceTokenFactory
     */
    protected function getFundingSourceTokenFactoryService()
    {
        return $this->services['PsCheckout\\Core\\FundingSource\\Factory\\FundingSourceTokenFactory'] = new \PsCheckout\Core\FundingSource\Factory\FundingSourceTokenFactory(${($_ = isset($this->services['PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourceTranslationProvider']) ? $this->services['PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourceTranslationProvider'] : $this->getFundingSourceTranslationProviderService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Presentation\\Presenter\\FundingSource\\LogoPresenter']) ? $this->services['PsCheckout\\Presentation\\Presenter\\FundingSource\\LogoPresenter'] : $this->getLogoPresenterService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\OrderState\Action\ChangeOrderStateAction' shared service.
     *
     * @return \PsCheckout\Core\OrderState\Action\ChangeOrderStateAction
     */
    protected function getChangeOrderStateActionService()
    {
        return $this->services['PsCheckout\\Core\\OrderState\\Action\\ChangeOrderStateAction'] = new \PsCheckout\Core\OrderState\Action\ChangeOrderStateAction(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository'] : ($this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository'] = new \PsCheckout\Infrastructure\Repository\OrderRepository())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\OrderStateRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\OrderStateRepository'] : ($this->services['PsCheckout\\Infrastructure\\Repository\\OrderStateRepository'] = new \PsCheckout\Infrastructure\Repository\OrderStateRepository())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\OrderHistoryRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\OrderHistoryRepository'] : ($this->services['PsCheckout\\Infrastructure\\Repository\\OrderHistoryRepository'] = new \PsCheckout\Infrastructure\Repository\OrderHistoryRepository())) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\OrderState\Action\SetRefundedOrderStateAction' shared service.
     *
     * @return \PsCheckout\Core\OrderState\Action\SetRefundedOrderStateAction
     */
    protected function getSetRefundedOrderStateActionService()
    {
        return $this->services['PsCheckout\\Core\\OrderState\\Action\\SetRefundedOrderStateAction'] = new \PsCheckout\Core\OrderState\Action\SetRefundedOrderStateAction(${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Refund\\Provider\\PayPalRefundOrderProvider']) ? $this->services['PsCheckout\\Core\\PayPal\\Refund\\Provider\\PayPalRefundOrderProvider'] : $this->getPayPalRefundOrderProviderService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Provider\\PayPalOrderProvider']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Provider\\PayPalOrderProvider'] : $this->getPayPalOrderProviderService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\OrderState\\Service\\OrderStateMapper']) ? $this->services['PsCheckout\\Core\\OrderState\\Service\\OrderStateMapper'] : $this->getOrderStateMapperService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\OrderState\\Action\\ChangeOrderStateAction']) ? $this->services['PsCheckout\\Core\\OrderState\\Action\\ChangeOrderStateAction'] : $this->getChangeOrderStateActionService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Cache\\PayPalOrderCache']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Cache\\PayPalOrderCache'] : $this->getPayPalOrderCacheService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\OrderState\Service\OrderStateMapper' shared service.
     *
     * @return \PsCheckout\Core\OrderState\Service\OrderStateMapper
     */
    protected function getOrderStateMapperService()
    {
        return $this->services['PsCheckout\\Core\\OrderState\\Service\\OrderStateMapper'] = new \PsCheckout\Core\OrderState\Service\OrderStateMapper(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\Order\Builder\Node\AmountBreakdownNode' shared service.
     *
     * @return \PsCheckout\Core\Order\Builder\Node\AmountBreakdownNode
     */
    protected function getAmountBreakdownNodeService()
    {
        return $this->services['PsCheckout\\Core\\Order\\Builder\\Node\\AmountBreakdownNode'] = new \PsCheckout\Core\Order\Builder\Node\AmountBreakdownNode();
    }

    /**
     * Gets the public 'PsCheckout\Core\Order\Builder\Node\ApplicationContextNodeBuilder' shared service.
     *
     * @return \PsCheckout\Core\Order\Builder\Node\ApplicationContextNodeBuilder
     */
    protected function getApplicationContextNodeBuilderService()
    {
        return $this->services['PsCheckout\\Core\\Order\\Builder\\Node\\ApplicationContextNodeBuilder'] = new \PsCheckout\Core\Order\Builder\Node\ApplicationContextNodeBuilder(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Link']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Link'] : $this->getLinkService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\Order\Builder\Node\BaseNodeBuilder' shared service.
     *
     * @return \PsCheckout\Core\Order\Builder\Node\BaseNodeBuilder
     */
    protected function getBaseNodeBuilderService()
    {
        return $this->services['PsCheckout\\Core\\Order\\Builder\\Node\\BaseNodeBuilder'] = new \PsCheckout\Core\Order\Builder\Node\BaseNodeBuilder(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\Order\Builder\Node\CardPaymentSourceNodeBuilder' shared service.
     *
     * @return \PsCheckout\Core\Order\Builder\Node\CardPaymentSourceNodeBuilder
     */
    protected function getCardPaymentSourceNodeBuilderService()
    {
        return $this->services['PsCheckout\\Core\\Order\\Builder\\Node\\CardPaymentSourceNodeBuilder'] = new \PsCheckout\Core\Order\Builder\Node\CardPaymentSourceNodeBuilder(${($_ = isset($this->services['PsCheckout\\Core\\Settings\\Configuration\\PayPalConfiguration']) ? $this->services['PsCheckout\\Core\\Settings\\Configuration\\PayPalConfiguration'] : $this->getPayPalConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\CountryRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\CountryRepository'] : $this->getCountryRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\StateRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\StateRepository'] : ($this->services['PsCheckout\\Infrastructure\\Repository\\StateRepository'] = new \PsCheckout\Infrastructure\Repository\StateRepository())) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\Order\Builder\Node\GooglePayPaymentSourceNodeBuilder' shared service.
     *
     * @return \PsCheckout\Core\Order\Builder\Node\GooglePayPaymentSourceNodeBuilder
     */
    protected function getGooglePayPaymentSourceNodeBuilderService()
    {
        return $this->services['PsCheckout\\Core\\Order\\Builder\\Node\\GooglePayPaymentSourceNodeBuilder'] = new \PsCheckout\Core\Order\Builder\Node\GooglePayPaymentSourceNodeBuilder(${($_ = isset($this->services['PsCheckout\\Core\\Settings\\Configuration\\PayPalConfiguration']) ? $this->services['PsCheckout\\Core\\Settings\\Configuration\\PayPalConfiguration'] : $this->getPayPalConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\Order\Builder\Node\PayPalPaymentSourceNodeBuilder' shared service.
     *
     * @return \PsCheckout\Core\Order\Builder\Node\PayPalPaymentSourceNodeBuilder
     */
    protected function getPayPalPaymentSourceNodeBuilderService()
    {
        return $this->services['PsCheckout\\Core\\Order\\Builder\\Node\\PayPalPaymentSourceNodeBuilder'] = new \PsCheckout\Core\Order\Builder\Node\PayPalPaymentSourceNodeBuilder();
    }

    /**
     * Gets the public 'PsCheckout\Core\Order\Builder\Node\PayerNodeBuilder' shared service.
     *
     * @return \PsCheckout\Core\Order\Builder\Node\PayerNodeBuilder
     */
    protected function getPayerNodeBuilderService()
    {
        return $this->services['PsCheckout\\Core\\Order\\Builder\\Node\\PayerNodeBuilder'] = new \PsCheckout\Core\Order\Builder\Node\PayerNodeBuilder(${($_ = isset($this->services['Psr\\Log\\LoggerInterface']) ? $this->services['Psr\\Log\\LoggerInterface'] : $this->getLoggerInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Validate']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Validate'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Validate'] = new \PsCheckout\Infrastructure\Adapter\Validate())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\CountryRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\CountryRepository'] : $this->getCountryRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\StateRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\StateRepository'] : ($this->services['PsCheckout\\Infrastructure\\Repository\\StateRepository'] = new \PsCheckout\Infrastructure\Repository\StateRepository())) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\Order\Builder\Node\ShippingNodeBuilder' shared service.
     *
     * @return \PsCheckout\Core\Order\Builder\Node\ShippingNodeBuilder
     */
    protected function getShippingNodeBuilderService()
    {
        return $this->services['PsCheckout\\Core\\Order\\Builder\\Node\\ShippingNodeBuilder'] = new \PsCheckout\Core\Order\Builder\Node\ShippingNodeBuilder(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\GenderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\GenderRepository'] : ($this->services['PsCheckout\\Infrastructure\\Repository\\GenderRepository'] = new \PsCheckout\Infrastructure\Repository\GenderRepository())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\CountryRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\CountryRepository'] : $this->getCountryRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\StateRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\StateRepository'] : ($this->services['PsCheckout\\Infrastructure\\Repository\\StateRepository'] = new \PsCheckout\Infrastructure\Repository\StateRepository())) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\Order\Builder\Node\SupplementaryDataNodeBuilder' shared service.
     *
     * @return \PsCheckout\Core\Order\Builder\Node\SupplementaryDataNodeBuilder
     */
    protected function getSupplementaryDataNodeBuilderService()
    {
        return $this->services['PsCheckout\\Core\\Order\\Builder\\Node\\SupplementaryDataNodeBuilder'] = new \PsCheckout\Core\Order\Builder\Node\SupplementaryDataNodeBuilder(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\CountryRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\CountryRepository'] : $this->getCountryRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\StateRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\StateRepository'] : ($this->services['PsCheckout\\Infrastructure\\Repository\\StateRepository'] = new \PsCheckout\Infrastructure\Repository\StateRepository())) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\Order\Builder\OrderPayloadBuilder' shared service.
     *
     * @return \PsCheckout\Core\Order\Builder\OrderPayloadBuilder
     */
    protected function getOrderPayloadBuilderService()
    {
        return $this->services['PsCheckout\\Core\\Order\\Builder\\OrderPayloadBuilder'] = new \PsCheckout\Core\Order\Builder\OrderPayloadBuilder(${($_ = isset($this->services['PsCheckout\\Core\\Order\\Builder\\Node\\BaseNodeBuilder']) ? $this->services['PsCheckout\\Core\\Order\\Builder\\Node\\BaseNodeBuilder'] : $this->getBaseNodeBuilderService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\Order\\Builder\\Node\\AmountBreakdownNode']) ? $this->services['PsCheckout\\Core\\Order\\Builder\\Node\\AmountBreakdownNode'] : ($this->services['PsCheckout\\Core\\Order\\Builder\\Node\\AmountBreakdownNode'] = new \PsCheckout\Core\Order\Builder\Node\AmountBreakdownNode())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\Order\\Builder\\Node\\ShippingNodeBuilder']) ? $this->services['PsCheckout\\Core\\Order\\Builder\\Node\\ShippingNodeBuilder'] : $this->getShippingNodeBuilderService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\Order\\Builder\\Node\\PayerNodeBuilder']) ? $this->services['PsCheckout\\Core\\Order\\Builder\\Node\\PayerNodeBuilder'] : $this->getPayerNodeBuilderService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\Order\\Builder\\Node\\CardPaymentSourceNodeBuilder']) ? $this->services['PsCheckout\\Core\\Order\\Builder\\Node\\CardPaymentSourceNodeBuilder'] : $this->getCardPaymentSourceNodeBuilderService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\Order\\Builder\\Node\\SupplementaryDataNodeBuilder']) ? $this->services['PsCheckout\\Core\\Order\\Builder\\Node\\SupplementaryDataNodeBuilder'] : $this->getSupplementaryDataNodeBuilderService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\Order\\Builder\\Node\\ApplicationContextNodeBuilder']) ? $this->services['PsCheckout\\Core\\Order\\Builder\\Node\\ApplicationContextNodeBuilder'] : $this->getApplicationContextNodeBuilderService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\Order\\Builder\\Node\\PayPalPaymentSourceNodeBuilder']) ? $this->services['PsCheckout\\Core\\Order\\Builder\\Node\\PayPalPaymentSourceNodeBuilder'] : ($this->services['PsCheckout\\Core\\Order\\Builder\\Node\\PayPalPaymentSourceNodeBuilder'] = new \PsCheckout\Core\Order\Builder\Node\PayPalPaymentSourceNodeBuilder())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\Order\\Builder\\Node\\GooglePayPaymentSourceNodeBuilder']) ? $this->services['PsCheckout\\Core\\Order\\Builder\\Node\\GooglePayPaymentSourceNodeBuilder'] : $this->getGooglePayPaymentSourceNodeBuilderService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\Card3DSecure\Card3DSecureValidator' shared service.
     *
     * @return \PsCheckout\Core\PayPal\Card3DSecure\Card3DSecureValidator
     */
    protected function getCard3DSecureValidatorService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\Card3DSecure\\Card3DSecureValidator'] = new \PsCheckout\Core\PayPal\Card3DSecure\Card3DSecureValidator();
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\OrderStatus\Action\PayPalCheckOrderStatusAction' shared service.
     *
     * @return \PsCheckout\Core\PayPal\OrderStatus\Action\PayPalCheckOrderStatusAction
     */
    protected function getPayPalCheckOrderStatusActionService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\OrderStatus\\Action\\PayPalCheckOrderStatusAction'] = new \PsCheckout\Core\PayPal\OrderStatus\Action\PayPalCheckOrderStatusAction();
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\Order\Action\RefundPayPalOrderAction' shared service.
     *
     * @return \PsCheckout\Core\PayPal\Order\Action\RefundPayPalOrderAction
     */
    protected function getRefundPayPalOrderActionService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\Order\\Action\\RefundPayPalOrderAction'] = new \PsCheckout\Core\PayPal\Order\Action\RefundPayPalOrderAction(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Api\\Http\\OrderHttpClient']) ? $this->services['PsCheckout\\Api\\Http\\OrderHttpClient'] : $this->getOrderHttpClientService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\OrderState\\Action\\SetRefundedOrderStateAction']) ? $this->services['PsCheckout\\Core\\OrderState\\Action\\SetRefundedOrderStateAction'] : $this->getSetRefundedOrderStateActionService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\Order\Action\UpdatePayPalOrderPurchaseUnitAction' shared service.
     *
     * @return \PsCheckout\Core\PayPal\Order\Action\UpdatePayPalOrderPurchaseUnitAction
     */
    protected function getUpdatePayPalOrderPurchaseUnitActionService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\Order\\Action\\UpdatePayPalOrderPurchaseUnitAction'] = new \PsCheckout\Core\PayPal\Order\Action\UpdatePayPalOrderPurchaseUnitAction(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderPurchaseUnitRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderPurchaseUnitRepository'] : $this->getPayPalOrderPurchaseUnitRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderCaptureRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderCaptureRepository'] : $this->getPayPalOrderCaptureRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderAuthorizationRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderAuthorizationRepository'] : $this->getPayPalOrderAuthorizationRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRefundRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRefundRepository'] : $this->getPayPalOrderRefundRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\Order\Cache\PayPalOrderCache' shared service.
     *
     * @return \PsCheckout\Core\PayPal\Order\Cache\PayPalOrderCache
     */
    protected function getPayPalOrderCacheService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\Order\\Cache\\PayPalOrderCache'] = new \PsCheckout\Core\PayPal\Order\Cache\PayPalOrderCache(${($_ = isset($this->services['PsCheckout\\Cache\\Array\\PayPalOrder']) ? $this->services['PsCheckout\\Cache\\Array\\PayPalOrder'] : ($this->services['PsCheckout\\Cache\\Array\\PayPalOrder'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Cache\\FileSystem\\PayPalOrder']) ? $this->services['PsCheckout\\Cache\\FileSystem\\PayPalOrder'] : $this->getPayPalOrder2Service()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\OrderStatus\\Action\\PayPalCheckOrderStatusAction']) ? $this->services['PsCheckout\\Core\\PayPal\\OrderStatus\\Action\\PayPalCheckOrderStatusAction'] : ($this->services['PsCheckout\\Core\\PayPal\\OrderStatus\\Action\\PayPalCheckOrderStatusAction'] = new \PsCheckout\Core\PayPal\OrderStatus\Action\PayPalCheckOrderStatusAction())) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\Order\Provider\PayPalOrderProvider' shared service.
     *
     * @return \PsCheckout\Core\PayPal\Order\Provider\PayPalOrderProvider
     */
    protected function getPayPalOrderProviderService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\Order\\Provider\\PayPalOrderProvider'] = new \PsCheckout\Core\PayPal\Order\Provider\PayPalOrderProvider(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Cache\\PayPalOrderCache']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Cache\\PayPalOrderCache'] : $this->getPayPalOrderCacheService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository'] : $this->getPayPalOrderRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Api\\Http\\OrderHttpClient']) ? $this->services['PsCheckout\\Api\\Http\\OrderHttpClient'] : $this->getOrderHttpClientService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\Refund\Provider\PayPalRefundOrderProvider' shared service.
     *
     * @return \PsCheckout\Core\PayPal\Refund\Provider\PayPalRefundOrderProvider
     */
    protected function getPayPalRefundOrderProviderService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\Refund\\Provider\\PayPalRefundOrderProvider'] = new \PsCheckout\Core\PayPal\Refund\Provider\PayPalRefundOrderProvider(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository'] : $this->getPayPalOrderRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\ShippingTracking\Action\AddTrackingAction' shared service.
     *
     * @return \PsCheckout\Core\PayPal\ShippingTracking\Action\AddTrackingAction
     */
    protected function getAddTrackingActionService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Action\\AddTrackingAction'] = new \PsCheckout\Core\PayPal\ShippingTracking\Action\AddTrackingAction(${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Processor\\ShipmentProcessor']) ? $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Processor\\ShipmentProcessor'] : $this->getShipmentProcessorService()) && false ?: '_'}, ${($_ = isset($this->services['Psr\\Log\\LoggerInterface']) ? $this->services['Psr\\Log\\LoggerInterface'] : $this->getLoggerInterfaceService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\ShippingTracking\Action\AddTrackingActionInterface' shared service.
     *
     * @return \PsCheckout\Core\PayPal\ShippingTracking\Action\AddTrackingAction
     */
    protected function getAddTrackingActionInterfaceService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Action\\AddTrackingActionInterface'] = new \PsCheckout\Core\PayPal\ShippingTracking\Action\AddTrackingAction(${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Processor\\ShipmentProcessorInterface']) ? $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Processor\\ShipmentProcessorInterface'] : $this->getShipmentProcessorInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['Psr\\Log\\LoggerInterface']) ? $this->services['Psr\\Log\\LoggerInterface'] : $this->getLoggerInterfaceService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\ShippingTracking\Action\ProcessExternalShipmentAction' shared service.
     *
     * @return \PsCheckout\Core\PayPal\ShippingTracking\Action\ProcessExternalShipmentAction
     */
    protected function getProcessExternalShipmentActionService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Action\\ProcessExternalShipmentAction'] = new \PsCheckout\Core\PayPal\ShippingTracking\Action\ProcessExternalShipmentAction(${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Processor\\ExternalShipmentProcessor']) ? $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Processor\\ExternalShipmentProcessor'] : $this->getExternalShipmentProcessorService()) && false ?: '_'}, ${($_ = isset($this->services['Psr\\Log\\LoggerInterface']) ? $this->services['Psr\\Log\\LoggerInterface'] : $this->getLoggerInterfaceService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\ShippingTracking\Builder\Node\TrackingBaseNodeBuilder' shared service.
     *
     * @return \PsCheckout\Core\PayPal\ShippingTracking\Builder\Node\TrackingBaseNodeBuilder
     */
    protected function getTrackingBaseNodeBuilderService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Builder\\Node\\TrackingBaseNodeBuilder'] = new \PsCheckout\Core\PayPal\ShippingTracking\Builder\Node\TrackingBaseNodeBuilder();
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\ShippingTracking\Builder\Node\TrackingCarrierModuleNodeBuilder' shared service.
     *
     * @return \PsCheckout\Core\PayPal\ShippingTracking\Builder\Node\TrackingCarrierModuleNodeBuilder
     */
    protected function getTrackingCarrierModuleNodeBuilderService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Builder\\Node\\TrackingCarrierModuleNodeBuilder'] = new \PsCheckout\Core\PayPal\ShippingTracking\Builder\Node\TrackingCarrierModuleNodeBuilder();
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\ShippingTracking\Builder\Node\TrackingItemsNodeBuilder' shared service.
     *
     * @return \PsCheckout\Core\PayPal\ShippingTracking\Builder\Node\TrackingItemsNodeBuilder
     */
    protected function getTrackingItemsNodeBuilderService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Builder\\Node\\TrackingItemsNodeBuilder'] = new \PsCheckout\Core\PayPal\ShippingTracking\Builder\Node\TrackingItemsNodeBuilder(${($_ = isset($this->services['Psr\\Log\\LoggerInterface']) ? $this->services['Psr\\Log\\LoggerInterface'] : $this->getLoggerInterfaceService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\ShippingTracking\Builder\TrackingPayloadBuilder' shared service.
     *
     * @return \PsCheckout\Core\PayPal\ShippingTracking\Builder\TrackingPayloadBuilder
     */
    protected function getTrackingPayloadBuilderService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Builder\\TrackingPayloadBuilder'] = new \PsCheckout\Core\PayPal\ShippingTracking\Builder\TrackingPayloadBuilder(${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Builder\\Node\\TrackingBaseNodeBuilder']) ? $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Builder\\Node\\TrackingBaseNodeBuilder'] : ($this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Builder\\Node\\TrackingBaseNodeBuilder'] = new \PsCheckout\Core\PayPal\ShippingTracking\Builder\Node\TrackingBaseNodeBuilder())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Builder\\Node\\TrackingItemsNodeBuilder']) ? $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Builder\\Node\\TrackingItemsNodeBuilder'] : $this->getTrackingItemsNodeBuilderService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Builder\\Node\\TrackingCarrierModuleNodeBuilder']) ? $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Builder\\Node\\TrackingCarrierModuleNodeBuilder'] : ($this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Builder\\Node\\TrackingCarrierModuleNodeBuilder'] = new \PsCheckout\Core\PayPal\ShippingTracking\Builder\Node\TrackingCarrierModuleNodeBuilder())) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\ShippingTracking\Cache\ShippingTrackingCache' shared service.
     *
     * @return \PsCheckout\Core\PayPal\ShippingTracking\Cache\ShippingTrackingCache
     */
    protected function getShippingTrackingCacheService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Cache\\ShippingTrackingCache'] = new \PsCheckout\Core\PayPal\ShippingTracking\Cache\ShippingTrackingCache(${($_ = isset($this->services['PsCheckout\\Cache\\Array\\ShippingTracking']) ? $this->services['PsCheckout\\Cache\\Array\\ShippingTracking'] : ($this->services['PsCheckout\\Cache\\Array\\ShippingTracking'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Cache\\FileSystem\\ShippingTracking']) ? $this->services['PsCheckout\\Cache\\FileSystem\\ShippingTracking'] : $this->getShippingTracking2Service()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\ShippingTracking\Processor\ExternalShipmentProcessor' shared service.
     *
     * @return \PsCheckout\Core\PayPal\ShippingTracking\Processor\ExternalShipmentProcessor
     */
    protected function getExternalShipmentProcessorService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Processor\\ExternalShipmentProcessor'] = new \PsCheckout\Core\PayPal\ShippingTracking\Processor\ExternalShipmentProcessor(${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Validator\\OrderTrackerValidator']) ? $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Validator\\OrderTrackerValidator'] : $this->getOrderTrackerValidatorService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Builder\\TrackingPayloadBuilder']) ? $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Builder\\TrackingPayloadBuilder'] : $this->getTrackingPayloadBuilderService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\ShippingTrackingRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\ShippingTrackingRepository'] : $this->getShippingTrackingRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['Psr\\Log\\LoggerInterface']) ? $this->services['Psr\\Log\\LoggerInterface'] : $this->getLoggerInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Cache\\ShippingTrackingCache']) ? $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Cache\\ShippingTrackingCache'] : $this->getShippingTrackingCacheService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Service\\TrackingApiService']) ? $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Service\\TrackingApiService'] : $this->getTrackingApiServiceService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Service\\TrackingDatabaseHandler']) ? $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Service\\TrackingDatabaseHandler'] : $this->getTrackingDatabaseHandlerService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Action\\AddTrackingActionInterface']) ? $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Action\\AddTrackingActionInterface'] : $this->getAddTrackingActionInterfaceService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\ShippingTracking\Processor\ShipmentProcessor' shared service.
     *
     * @return \PsCheckout\Core\PayPal\ShippingTracking\Processor\ShipmentProcessor
     */
    protected function getShipmentProcessorService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Processor\\ShipmentProcessor'] = new \PsCheckout\Core\PayPal\ShippingTracking\Processor\ShipmentProcessor(${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Validator\\OrderTrackerValidator']) ? $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Validator\\OrderTrackerValidator'] : $this->getOrderTrackerValidatorService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Builder\\TrackingPayloadBuilder']) ? $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Builder\\TrackingPayloadBuilder'] : $this->getTrackingPayloadBuilderService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\ShippingTrackingRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\ShippingTrackingRepository'] : $this->getShippingTrackingRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['Psr\\Log\\LoggerInterface']) ? $this->services['Psr\\Log\\LoggerInterface'] : $this->getLoggerInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Cache\\ShippingTrackingCache']) ? $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Cache\\ShippingTrackingCache'] : $this->getShippingTrackingCacheService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Service\\TrackingApiService']) ? $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Service\\TrackingApiService'] : $this->getTrackingApiServiceService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Service\\TrackingDatabaseHandler']) ? $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Service\\TrackingDatabaseHandler'] : $this->getTrackingDatabaseHandlerService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\ShippingTracking\Processor\ShipmentProcessorInterface' shared service.
     *
     * @return \PsCheckout\Core\PayPal\ShippingTracking\Processor\ShipmentProcessor
     */
    protected function getShipmentProcessorInterfaceService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Processor\\ShipmentProcessorInterface'] = new \PsCheckout\Core\PayPal\ShippingTracking\Processor\ShipmentProcessor(${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Validator\\OrderTrackerValidator']) ? $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Validator\\OrderTrackerValidator'] : $this->getOrderTrackerValidatorService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Builder\\TrackingPayloadBuilder']) ? $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Builder\\TrackingPayloadBuilder'] : $this->getTrackingPayloadBuilderService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\ShippingTrackingRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\ShippingTrackingRepository'] : $this->getShippingTrackingRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['Psr\\Log\\LoggerInterface']) ? $this->services['Psr\\Log\\LoggerInterface'] : $this->getLoggerInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Cache\\ShippingTrackingCache']) ? $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Cache\\ShippingTrackingCache'] : $this->getShippingTrackingCacheService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Service\\TrackingApiService']) ? $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Service\\TrackingApiService'] : $this->getTrackingApiServiceService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Service\\TrackingDatabaseHandler']) ? $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Service\\TrackingDatabaseHandler'] : $this->getTrackingDatabaseHandlerService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\ShippingTracking\Service\TrackingApiService' shared service.
     *
     * @return \PsCheckout\Core\PayPal\ShippingTracking\Service\TrackingApiService
     */
    protected function getTrackingApiServiceService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Service\\TrackingApiService'] = new \PsCheckout\Core\PayPal\ShippingTracking\Service\TrackingApiService(${($_ = isset($this->services['PsCheckout\\Api\\Http\\OrderShipmentTrackingHttpClient']) ? $this->services['PsCheckout\\Api\\Http\\OrderShipmentTrackingHttpClient'] : $this->getOrderShipmentTrackingHttpClientService()) && false ?: '_'}, ${($_ = isset($this->services['Psr\\Log\\LoggerInterface']) ? $this->services['Psr\\Log\\LoggerInterface'] : $this->getLoggerInterfaceService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\ShippingTracking\Service\TrackingDatabaseHandler' shared service.
     *
     * @return \PsCheckout\Core\PayPal\ShippingTracking\Service\TrackingDatabaseHandler
     */
    protected function getTrackingDatabaseHandlerService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Service\\TrackingDatabaseHandler'] = new \PsCheckout\Core\PayPal\ShippingTracking\Service\TrackingDatabaseHandler(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\ShippingTrackingRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\ShippingTrackingRepository'] : $this->getShippingTrackingRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['Psr\\Log\\LoggerInterface']) ? $this->services['Psr\\Log\\LoggerInterface'] : $this->getLoggerInterfaceService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\ShippingTracking\Validator\OrderTrackerValidator' shared service.
     *
     * @return \PsCheckout\Core\PayPal\ShippingTracking\Validator\OrderTrackerValidator
     */
    protected function getOrderTrackerValidatorService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\ShippingTracking\\Validator\\OrderTrackerValidator'] = new \PsCheckout\Core\PayPal\ShippingTracking\Validator\OrderTrackerValidator(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository'] : $this->getPayPalOrderRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderCaptureRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderCaptureRepository'] : $this->getPayPalOrderCaptureRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PaymentToken\Action\DeletePaymentTokenAction' shared service.
     *
     * @return \PsCheckout\Core\PaymentToken\Action\DeletePaymentTokenAction
     */
    protected function getDeletePaymentTokenActionService()
    {
        return $this->services['PsCheckout\\Core\\PaymentToken\\Action\\DeletePaymentTokenAction'] = new \PsCheckout\Core\PaymentToken\Action\DeletePaymentTokenAction(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PaymentTokenRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PaymentTokenRepository'] : $this->getPaymentTokenRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Api\\Http\\CheckoutHttpClient']) ? $this->services['PsCheckout\\Api\\Http\\CheckoutHttpClient'] : $this->getCheckoutHttpClientService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\Settings\Configuration\PayPalConfiguration' shared service.
     *
     * @return \PsCheckout\Core\Settings\Configuration\PayPalConfiguration
     */
    protected function getPayPalConfigurationService()
    {
        return $this->services['PsCheckout\\Core\\Settings\\Configuration\\PayPalConfiguration'] = new \PsCheckout\Core\Settings\Configuration\PayPalConfiguration(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\Webhook\Service\WebhookSecretToken' shared service.
     *
     * @return \PsCheckout\Core\Webhook\Service\WebhookSecretToken
     */
    protected function getWebhookSecretTokenService()
    {
        return $this->services['PsCheckout\\Core\\Webhook\\Service\\WebhookSecretToken'] = new \PsCheckout\Core\Webhook\Service\WebhookSecretToken(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Action\SaveBatchConfigurationActionInterface' shared service.
     *
     * @return \PsCheckout\Infrastructure\Action\SaveBatchConfigurationAction
     */
    protected function getSaveBatchConfigurationActionInterfaceService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Action\\SaveBatchConfigurationActionInterface'] = new \PsCheckout\Infrastructure\Action\SaveBatchConfigurationAction(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Adapter\Address' shared service.
     *
     * @return \PsCheckout\Infrastructure\Adapter\Address
     */
    protected function getAddressService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Adapter\\Address'] = new \PsCheckout\Infrastructure\Adapter\Address();
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Adapter\Cart' shared service.
     *
     * @return \PsCheckout\Infrastructure\Adapter\Cart
     */
    protected function getCartService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Adapter\\Cart'] = new \PsCheckout\Infrastructure\Adapter\Cart();
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Adapter\Configuration' shared service.
     *
     * @return \PsCheckout\Infrastructure\Adapter\Configuration
     */
    protected function getConfigurationService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] = new \PsCheckout\Infrastructure\Adapter\Configuration(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Context']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] = new \PsCheckout\Infrastructure\Adapter\Context())) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Adapter\Context' shared service.
     *
     * @return \PsCheckout\Infrastructure\Adapter\Context
     */
    protected function getContextService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] = new \PsCheckout\Infrastructure\Adapter\Context();
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Adapter\Country' shared service.
     *
     * @return \PsCheckout\Infrastructure\Adapter\Country
     */
    protected function getCountryService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Adapter\\Country'] = new \PsCheckout\Infrastructure\Adapter\Country();
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Adapter\Currency' shared service.
     *
     * @return \PsCheckout\Infrastructure\Adapter\Currency
     */
    protected function getCurrencyService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Adapter\\Currency'] = new \PsCheckout\Infrastructure\Adapter\Currency();
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Adapter\Customer' shared service.
     *
     * @return \PsCheckout\Infrastructure\Adapter\Customer
     */
    protected function getCustomerService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Adapter\\Customer'] = new \PsCheckout\Infrastructure\Adapter\Customer();
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Adapter\Language' shared service.
     *
     * @return \PsCheckout\Infrastructure\Adapter\Language
     */
    protected function getLanguageService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Adapter\\Language'] = new \PsCheckout\Infrastructure\Adapter\Language();
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Adapter\Link' shared service.
     *
     * @return \PsCheckout\Infrastructure\Adapter\Link
     */
    protected function getLinkService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Adapter\\Link'] = new \PsCheckout\Infrastructure\Adapter\Link(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Context']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] = new \PsCheckout\Infrastructure\Adapter\Context())) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->name);
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Adapter\ShopContext' shared service.
     *
     * @return \PsCheckout\Infrastructure\Adapter\ShopContext
     */
    protected function getShopContextService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Adapter\\ShopContext'] = new \PsCheckout\Infrastructure\Adapter\ShopContext();
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Adapter\SystemConfiguration' shared service.
     *
     * @return \PsCheckout\Infrastructure\Adapter\SystemConfiguration
     */
    protected function getSystemConfigurationService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Adapter\\SystemConfiguration'] = new \PsCheckout\Infrastructure\Adapter\SystemConfiguration();
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Adapter\Tools' shared service.
     *
     * @return \PsCheckout\Infrastructure\Adapter\Tools
     */
    protected function getToolsService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Adapter\\Tools'] = new \PsCheckout\Infrastructure\Adapter\Tools();
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Adapter\Validate' shared service.
     *
     * @return \PsCheckout\Infrastructure\Adapter\Validate
     */
    protected function getValidateService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Adapter\\Validate'] = new \PsCheckout\Infrastructure\Adapter\Validate();
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Bootstrap\Install\AppleInstaller' shared service.
     *
     * @return \PsCheckout\Infrastructure\Bootstrap\Install\AppleInstaller
     */
    protected function getAppleInstallerService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Bootstrap\\Install\\AppleInstaller'] = new \PsCheckout\Infrastructure\Bootstrap\Install\AppleInstaller(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\SystemConfiguration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\SystemConfiguration'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\SystemConfiguration'] = new \PsCheckout\Infrastructure\Adapter\SystemConfiguration())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Bootstrap\Install\CompatibilityRulesInstaller' shared service.
     *
     * @return \PsCheckout\Infrastructure\Bootstrap\Install\CompatibilityRulesInstaller
     */
    protected function getCompatibilityRulesInstallerService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Bootstrap\\Install\\CompatibilityRulesInstaller'] = new \PsCheckout\Infrastructure\Bootstrap\Install\CompatibilityRulesInstaller(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\CountryRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\CountryRepository'] : $this->getCountryRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\CurrencyRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\CurrencyRepository'] : $this->getCurrencyRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Bootstrap\Install\ConfigurationInstaller' shared service.
     *
     * @return \PsCheckout\Infrastructure\Bootstrap\Install\ConfigurationInstaller
     */
    protected function getConfigurationInstallerService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Bootstrap\\Install\\ConfigurationInstaller'] = new \PsCheckout\Infrastructure\Bootstrap\Install\ConfigurationInstaller(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\ShopRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\ShopRepository'] : ($this->services['PsCheckout\\Infrastructure\\Repository\\ShopRepository'] = new \PsCheckout\Infrastructure\Repository\ShopRepository())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Bootstrap\Install\DatabaseTableInstaller' shared service.
     *
     * @return \PsCheckout\Infrastructure\Bootstrap\Install\DatabaseTableInstaller
     */
    protected function getDatabaseTableInstallerService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Bootstrap\\Install\\DatabaseTableInstaller'] = new \PsCheckout\Infrastructure\Bootstrap\Install\DatabaseTableInstaller(${($_ = isset($this->services['ps_checkout.db']) ? $this->services['ps_checkout.db'] : $this->getPsCheckout_DbService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Bootstrap\Install\FundingSourceInstaller' shared service.
     *
     * @return \PsCheckout\Infrastructure\Bootstrap\Install\FundingSourceInstaller
     */
    protected function getFundingSourceInstallerService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Bootstrap\\Install\\FundingSourceInstaller'] = new \PsCheckout\Infrastructure\Bootstrap\Install\FundingSourceInstaller(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\ShopRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\ShopRepository'] : ($this->services['PsCheckout\\Infrastructure\\Repository\\ShopRepository'] = new \PsCheckout\Infrastructure\Repository\ShopRepository())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\FundingSourceRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\FundingSourceRepository'] : $this->getFundingSourceRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Bootstrap\Install\Installer' shared service.
     *
     * @return \PsCheckout\Infrastructure\Bootstrap\Install\Installer
     */
    protected function getInstaller2Service()
    {
        return $this->services['PsCheckout\\Infrastructure\\Bootstrap\\Install\\Installer'] = new \PsCheckout\Infrastructure\Bootstrap\Install\Installer(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Bootstrap\\Install\\ConfigurationInstaller']) ? $this->services['PsCheckout\\Infrastructure\\Bootstrap\\Install\\ConfigurationInstaller'] : $this->getConfigurationInstallerService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Bootstrap\\Install\\DatabaseTableInstaller']) ? $this->services['PsCheckout\\Infrastructure\\Bootstrap\\Install\\DatabaseTableInstaller'] : $this->getDatabaseTableInstallerService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Bootstrap\\Install\\FundingSourceInstaller']) ? $this->services['PsCheckout\\Infrastructure\\Bootstrap\\Install\\FundingSourceInstaller'] : $this->getFundingSourceInstallerService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Bootstrap\\Install\\OrderStateInstaller']) ? $this->services['PsCheckout\\Infrastructure\\Bootstrap\\Install\\OrderStateInstaller'] : $this->getOrderStateInstallerService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Bootstrap\\Install\\CompatibilityRulesInstaller']) ? $this->services['PsCheckout\\Infrastructure\\Bootstrap\\Install\\CompatibilityRulesInstaller'] : $this->getCompatibilityRulesInstallerService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Bootstrap\Install\OrderStateInstaller' shared service.
     *
     * @return \PsCheckout\Infrastructure\Bootstrap\Install\OrderStateInstaller
     */
    protected function getOrderStateInstallerService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Bootstrap\\Install\\OrderStateInstaller'] = new \PsCheckout\Infrastructure\Bootstrap\Install\OrderStateInstaller(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Language']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Language'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Language'] = new \PsCheckout\Infrastructure\Adapter\Language())) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->name);
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Environment\Env' shared service.
     *
     * @return \PsCheckout\Infrastructure\Environment\Env
     */
    protected function getEnvService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Environment\\Env'] = new \PsCheckout\Infrastructure\Environment\Env(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->name, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Environment\EnvLoader' shared service.
     *
     * @return \PsCheckout\Infrastructure\Environment\EnvLoader
     */
    protected function getEnvLoaderService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Environment\\EnvLoader'] = new \PsCheckout\Infrastructure\Environment\EnvLoader();
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Logger\LoggerFactory' shared service.
     *
     * @return \PsCheckout\Infrastructure\Logger\LoggerFactory
     */
    protected function getLoggerFactoryService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Logger\\LoggerFactory'] = new \PsCheckout\Infrastructure\Logger\LoggerFactory(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->name, ${($_ = isset($this->services['Monolog\\Handler\\HandlerInterface']) ? $this->services['Monolog\\Handler\\HandlerInterface'] : $this->getHandlerInterfaceService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Logger\LoggerFileFinder' shared service.
     *
     * @return \PsCheckout\Infrastructure\Logger\LoggerFileFinder
     */
    protected function getLoggerFileFinderService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Logger\\LoggerFileFinder'] = new \PsCheckout\Infrastructure\Logger\LoggerFileFinder(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->name, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Context']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] = new \PsCheckout\Infrastructure\Adapter\Context())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Logger\LoggerFileReader' shared service.
     *
     * @return \PsCheckout\Infrastructure\Logger\LoggerFileReader
     */
    protected function getLoggerFileReaderService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Logger\\LoggerFileReader'] = new \PsCheckout\Infrastructure\Logger\LoggerFileReader(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Validate']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Validate'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Validate'] = new \PsCheckout\Infrastructure\Adapter\Validate())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Logger\\LoggerFileFinder']) ? $this->services['PsCheckout\\Infrastructure\\Logger\\LoggerFileFinder'] : $this->getLoggerFileFinderService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Logger\LoggerHandlerFactory' shared service.
     *
     * @return \PsCheckout\Infrastructure\Logger\LoggerHandlerFactory
     */
    protected function getLoggerHandlerFactoryService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Logger\\LoggerHandlerFactory'] = new \PsCheckout\Infrastructure\Logger\LoggerHandlerFactory(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Context']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] = new \PsCheckout\Infrastructure\Adapter\Context())) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->name);
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Repository\AddressRepository' shared service.
     *
     * @return \PsCheckout\Infrastructure\Repository\AddressRepository
     */
    protected function getAddressRepositoryService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Repository\\AddressRepository'] = new \PsCheckout\Infrastructure\Repository\AddressRepository(${($_ = isset($this->services['ps_checkout.db']) ? $this->services['ps_checkout.db'] : $this->getPsCheckout_DbService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Repository\CartRepository' shared service.
     *
     * @return \PsCheckout\Infrastructure\Repository\CartRepository
     */
    protected function getCartRepositoryService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Repository\\CartRepository'] = new \PsCheckout\Infrastructure\Repository\CartRepository();
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Repository\ConfigurationRepository' shared service.
     *
     * @return \PsCheckout\Infrastructure\Repository\ConfigurationRepository
     */
    protected function getConfigurationRepositoryService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Repository\\ConfigurationRepository'] = new \PsCheckout\Infrastructure\Repository\ConfigurationRepository(${($_ = isset($this->services['ps_checkout.db']) ? $this->services['ps_checkout.db'] : $this->getPsCheckout_DbService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Repository\CountryRepository' shared service.
     *
     * @return \PsCheckout\Infrastructure\Repository\CountryRepository
     */
    protected function getCountryRepositoryService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Repository\\CountryRepository'] = new \PsCheckout\Infrastructure\Repository\CountryRepository(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->name);
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Repository\CurrencyRepository' shared service.
     *
     * @return \PsCheckout\Infrastructure\Repository\CurrencyRepository
     */
    protected function getCurrencyRepositoryService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Repository\\CurrencyRepository'] = new \PsCheckout\Infrastructure\Repository\CurrencyRepository(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->name);
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Repository\CustomerRepository' shared service.
     *
     * @return \PsCheckout\Infrastructure\Repository\CustomerRepository
     */
    protected function getCustomerRepositoryService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Repository\\CustomerRepository'] = new \PsCheckout\Infrastructure\Repository\CustomerRepository();
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Repository\FundingSourceRepository' shared service.
     *
     * @return \PsCheckout\Infrastructure\Repository\FundingSourceRepository
     */
    protected function getFundingSourceRepositoryService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Repository\\FundingSourceRepository'] = new \PsCheckout\Infrastructure\Repository\FundingSourceRepository(${($_ = isset($this->services['ps_checkout.db']) ? $this->services['ps_checkout.db'] : $this->getPsCheckout_DbService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Repository\GenderRepository' shared service.
     *
     * @return \PsCheckout\Infrastructure\Repository\GenderRepository
     */
    protected function getGenderRepositoryService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Repository\\GenderRepository'] = new \PsCheckout\Infrastructure\Repository\GenderRepository();
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Repository\LanguageRepository' shared service.
     *
     * @return \PsCheckout\Infrastructure\Repository\LanguageRepository
     */
    protected function getLanguageRepositoryService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Repository\\LanguageRepository'] = new \PsCheckout\Infrastructure\Repository\LanguageRepository();
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Repository\OrderHistoryRepository' shared service.
     *
     * @return \PsCheckout\Infrastructure\Repository\OrderHistoryRepository
     */
    protected function getOrderHistoryRepositoryService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Repository\\OrderHistoryRepository'] = new \PsCheckout\Infrastructure\Repository\OrderHistoryRepository();
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Repository\OrderRepository' shared service.
     *
     * @return \PsCheckout\Infrastructure\Repository\OrderRepository
     */
    protected function getOrderRepositoryService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository'] = new \PsCheckout\Infrastructure\Repository\OrderRepository();
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Repository\OrderStateRepository' shared service.
     *
     * @return \PsCheckout\Infrastructure\Repository\OrderStateRepository
     */
    protected function getOrderStateRepositoryService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Repository\\OrderStateRepository'] = new \PsCheckout\Infrastructure\Repository\OrderStateRepository();
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Repository\PayPalCustomerRepository' shared service.
     *
     * @return \PsCheckout\Infrastructure\Repository\PayPalCustomerRepository
     */
    protected function getPayPalCustomerRepositoryService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalCustomerRepository'] = new \PsCheckout\Infrastructure\Repository\PayPalCustomerRepository(${($_ = isset($this->services['ps_checkout.db']) ? $this->services['ps_checkout.db'] : $this->getPsCheckout_DbService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Repository\PayPalOrderAuthorizationRepository' shared service.
     *
     * @return \PsCheckout\Infrastructure\Repository\PayPalOrderAuthorizationRepository
     */
    protected function getPayPalOrderAuthorizationRepositoryService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderAuthorizationRepository'] = new \PsCheckout\Infrastructure\Repository\PayPalOrderAuthorizationRepository(${($_ = isset($this->services['ps_checkout.db']) ? $this->services['ps_checkout.db'] : $this->getPsCheckout_DbService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Repository\PayPalOrderCaptureRepository' shared service.
     *
     * @return \PsCheckout\Infrastructure\Repository\PayPalOrderCaptureRepository
     */
    protected function getPayPalOrderCaptureRepositoryService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderCaptureRepository'] = new \PsCheckout\Infrastructure\Repository\PayPalOrderCaptureRepository(${($_ = isset($this->services['ps_checkout.db']) ? $this->services['ps_checkout.db'] : $this->getPsCheckout_DbService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Repository\PayPalOrderMatrixRepository' shared service.
     *
     * @return \PsCheckout\Infrastructure\Repository\PayPalOrderMatrixRepository
     */
    protected function getPayPalOrderMatrixRepositoryService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderMatrixRepository'] = new \PsCheckout\Infrastructure\Repository\PayPalOrderMatrixRepository(${($_ = isset($this->services['ps_checkout.db']) ? $this->services['ps_checkout.db'] : $this->getPsCheckout_DbService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Repository\PayPalOrderPurchaseUnitRepository' shared service.
     *
     * @return \PsCheckout\Infrastructure\Repository\PayPalOrderPurchaseUnitRepository
     */
    protected function getPayPalOrderPurchaseUnitRepositoryService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderPurchaseUnitRepository'] = new \PsCheckout\Infrastructure\Repository\PayPalOrderPurchaseUnitRepository(${($_ = isset($this->services['ps_checkout.db']) ? $this->services['ps_checkout.db'] : $this->getPsCheckout_DbService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Repository\PayPalOrderRefundRepository' shared service.
     *
     * @return \PsCheckout\Infrastructure\Repository\PayPalOrderRefundRepository
     */
    protected function getPayPalOrderRefundRepositoryService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRefundRepository'] = new \PsCheckout\Infrastructure\Repository\PayPalOrderRefundRepository(${($_ = isset($this->services['ps_checkout.db']) ? $this->services['ps_checkout.db'] : $this->getPsCheckout_DbService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Repository\PayPalOrderRepository' shared service.
     *
     * @return \PsCheckout\Infrastructure\Repository\PayPalOrderRepository
     */
    protected function getPayPalOrderRepositoryService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository'] = new \PsCheckout\Infrastructure\Repository\PayPalOrderRepository(${($_ = isset($this->services['ps_checkout.db']) ? $this->services['ps_checkout.db'] : $this->getPsCheckout_DbService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Repository\PaymentTokenRepository' shared service.
     *
     * @return \PsCheckout\Infrastructure\Repository\PaymentTokenRepository
     */
    protected function getPaymentTokenRepositoryService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Repository\\PaymentTokenRepository'] = new \PsCheckout\Infrastructure\Repository\PaymentTokenRepository(${($_ = isset($this->services['ps_checkout.db']) ? $this->services['ps_checkout.db'] : $this->getPsCheckout_DbService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Repository\PsAccountRepository' shared service.
     *
     * @return \PsCheckout\Infrastructure\Repository\PsAccountRepository
     */
    protected function getPsAccountRepositoryService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Repository\\PsAccountRepository'] = new \PsCheckout\Infrastructure\Repository\PsAccountRepository(${($_ = isset($this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts']) ? $this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts'] : $this->getPsAccountsService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Repository\ShippingTrackingRepository' shared service.
     *
     * @return \PsCheckout\Infrastructure\Repository\ShippingTrackingRepository
     */
    protected function getShippingTrackingRepositoryService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Repository\\ShippingTrackingRepository'] = new \PsCheckout\Infrastructure\Repository\ShippingTrackingRepository(${($_ = isset($this->services['ps_checkout.db']) ? $this->services['ps_checkout.db'] : $this->getPsCheckout_DbService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Repository\ShopRepository' shared service.
     *
     * @return \PsCheckout\Infrastructure\Repository\ShopRepository
     */
    protected function getShopRepositoryService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Repository\\ShopRepository'] = new \PsCheckout\Infrastructure\Repository\ShopRepository();
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Repository\StateRepository' shared service.
     *
     * @return \PsCheckout\Infrastructure\Repository\StateRepository
     */
    protected function getStateRepositoryService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Repository\\StateRepository'] = new \PsCheckout\Infrastructure\Repository\StateRepository();
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Validator\MerchantValidator' shared service.
     *
     * @return \PsCheckout\Infrastructure\Validator\MerchantValidator
     */
    protected function getMerchantValidatorService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Validator\\MerchantValidator'] = new \PsCheckout\Infrastructure\Validator\MerchantValidator(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PsAccountRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PsAccountRepository'] : $this->getPsAccountRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Module\Presentation\Translator' shared service.
     *
     * @return \PsCheckout\Module\Presentation\Translator
     */
    protected function getTranslatorService()
    {
        return $this->services['PsCheckout\\Module\\Presentation\\Translator'] = new \PsCheckout\Module\Presentation\Translator(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Presentation\Presenter\Date\DatePresenter' shared service.
     *
     * @return \PsCheckout\Presentation\Presenter\Date\DatePresenter
     */
    protected function getDatePresenterService()
    {
        return $this->services['PsCheckout\\Presentation\\Presenter\\Date\\DatePresenter'] = new \PsCheckout\Presentation\Presenter\Date\DatePresenter(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Presentation\Presenter\FundingSource\FundingSourcePresenter' shared service.
     *
     * @return \PsCheckout\Presentation\Presenter\FundingSource\FundingSourcePresenter
     */
    protected function getFundingSourcePresenterService()
    {
        return $this->services['PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourcePresenter'] = new \PsCheckout\Presentation\Presenter\FundingSource\FundingSourcePresenter(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->getPathUri(), ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\FundingSourceRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\FundingSourceRepository'] : $this->getFundingSourceRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourceTranslationProvider']) ? $this->services['PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourceTranslationProvider'] : $this->getFundingSourceTranslationProviderService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Presentation\Presenter\FundingSource\FundingSourceTokenPresenter' shared service.
     *
     * @return \PsCheckout\Presentation\Presenter\FundingSource\FundingSourceTokenPresenter
     */
    protected function getFundingSourceTokenPresenterService()
    {
        return $this->services['PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourceTokenPresenter'] = new \PsCheckout\Presentation\Presenter\FundingSource\FundingSourceTokenPresenter(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PaymentTokenRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PaymentTokenRepository'] : $this->getPaymentTokenRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\FundingSource\\Factory\\FundingSourceTokenFactory']) ? $this->services['PsCheckout\\Core\\FundingSource\\Factory\\FundingSourceTokenFactory'] : $this->getFundingSourceTokenFactoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Presentation\Presenter\FundingSource\FundingSourceTranslationProvider' shared service.
     *
     * @return \PsCheckout\Presentation\Presenter\FundingSource\FundingSourceTranslationProvider
     */
    protected function getFundingSourceTranslationProviderService()
    {
        return $this->services['PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourceTranslationProvider'] = new \PsCheckout\Presentation\Presenter\FundingSource\FundingSourceTranslationProvider(${($_ = isset($this->services['PsCheckout\\Module\\Presentation\\Translator']) ? $this->services['PsCheckout\\Module\\Presentation\\Translator'] : $this->getTranslatorService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Presentation\Presenter\FundingSource\LogoPresenter' shared service.
     *
     * @return \PsCheckout\Presentation\Presenter\FundingSource\LogoPresenter
     */
    protected function getLogoPresenterService()
    {
        return $this->services['PsCheckout\\Presentation\\Presenter\\FundingSource\\LogoPresenter'] = new \PsCheckout\Presentation\Presenter\FundingSource\LogoPresenter(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->getPathUri());
    }

    /**
     * Gets the public 'PsCheckout\Presentation\Presenter\PayPalOrder\PayPalOrderPresenter' shared service.
     *
     * @return \PsCheckout\Presentation\Presenter\PayPalOrder\PayPalOrderPresenter
     */
    protected function getPayPalOrderPresenterService()
    {
        return $this->services['PsCheckout\\Presentation\\Presenter\\PayPalOrder\\PayPalOrderPresenter'] = new \PsCheckout\Presentation\Presenter\PayPalOrder\PayPalOrderPresenter(${($_ = isset($this->services['PsCheckout\\Presentation\\Presenter\\PayPalOrder\\PayPalOrderTransactionPresenter']) ? $this->services['PsCheckout\\Presentation\\Presenter\\PayPalOrder\\PayPalOrderTransactionPresenter'] : $this->getPayPalOrderTransactionPresenterService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Presentation\\Presenter\\PayPalOrder\\PayPalOrderTotalsPresenter']) ? $this->services['PsCheckout\\Presentation\\Presenter\\PayPalOrder\\PayPalOrderTotalsPresenter'] : ($this->services['PsCheckout\\Presentation\\Presenter\\PayPalOrder\\PayPalOrderTotalsPresenter'] = new \PsCheckout\Presentation\Presenter\PayPalOrder\PayPalOrderTotalsPresenter())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Card3DSecure\\Card3DSecureValidator']) ? $this->services['PsCheckout\\Core\\PayPal\\Card3DSecure\\Card3DSecureValidator'] : ($this->services['PsCheckout\\Core\\PayPal\\Card3DSecure\\Card3DSecureValidator'] = new \PsCheckout\Core\PayPal\Card3DSecure\Card3DSecureValidator())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Presentation\\Presenter\\FundingSource\\LogoPresenter']) ? $this->services['PsCheckout\\Presentation\\Presenter\\FundingSource\\LogoPresenter'] : $this->getLogoPresenterService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourceTranslationProvider']) ? $this->services['PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourceTranslationProvider'] : $this->getFundingSourceTranslationProviderService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Module\\Presentation\\Translator']) ? $this->services['PsCheckout\\Module\\Presentation\\Translator'] : $this->getTranslatorService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository'] : $this->getPayPalOrderRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Presentation\Presenter\PayPalOrder\PayPalOrderTotalsPresenter' shared service.
     *
     * @return \PsCheckout\Presentation\Presenter\PayPalOrder\PayPalOrderTotalsPresenter
     */
    protected function getPayPalOrderTotalsPresenterService()
    {
        return $this->services['PsCheckout\\Presentation\\Presenter\\PayPalOrder\\PayPalOrderTotalsPresenter'] = new \PsCheckout\Presentation\Presenter\PayPalOrder\PayPalOrderTotalsPresenter();
    }

    /**
     * Gets the public 'PsCheckout\Presentation\Presenter\PayPalOrder\PayPalOrderTransactionPresenter' shared service.
     *
     * @return \PsCheckout\Presentation\Presenter\PayPalOrder\PayPalOrderTransactionPresenter
     */
    protected function getPayPalOrderTransactionPresenterService()
    {
        return $this->services['PsCheckout\\Presentation\\Presenter\\PayPalOrder\\PayPalOrderTransactionPresenter'] = new \PsCheckout\Presentation\Presenter\PayPalOrder\PayPalOrderTransactionPresenter(${($_ = isset($this->services['PsCheckout\\Presentation\\Presenter\\Date\\DatePresenter']) ? $this->services['PsCheckout\\Presentation\\Presenter\\Date\\DatePresenter'] : $this->getDatePresenterService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Module\\Presentation\\Translator']) ? $this->services['PsCheckout\\Module\\Presentation\\Translator'] : $this->getTranslatorService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Presentation\Presenter\Settings\Admin\AdminSettingsPresenter' shared service.
     *
     * @return \PsCheckout\Presentation\Presenter\Settings\Admin\AdminSettingsPresenter
     */
    protected function getAdminSettingsPresenterService()
    {
        return $this->services['PsCheckout\\Presentation\\Presenter\\Settings\\Admin\\AdminSettingsPresenter'] = new \PsCheckout\Presentation\Presenter\Settings\Admin\AdminSettingsPresenter([0 => ${($_ = isset($this->services['PsCheckout\\Presentation\\Presenter\\Settings\\Admin\\Modules\\ContextModule']) ? $this->services['PsCheckout\\Presentation\\Presenter\\Settings\\Admin\\Modules\\ContextModule'] : $this->getContextModuleService()) && false ?: '_'}, 1 => ${($_ = isset($this->services['PsCheckout\\Presentation\\Presenter\\Settings\\Admin\\Modules\\ConfigurationModule']) ? $this->services['PsCheckout\\Presentation\\Presenter\\Settings\\Admin\\Modules\\ConfigurationModule'] : $this->getConfigurationModuleService()) && false ?: '_'}, 2 => ${($_ = isset($this->services['PsCheckout\\Presentation\\Presenter\\Settings\\Admin\\Modules\\PaypalModule']) ? $this->services['PsCheckout\\Presentation\\Presenter\\Settings\\Admin\\Modules\\PaypalModule'] : $this->getPaypalModuleService()) && false ?: '_'}]);
    }

    /**
     * Gets the public 'PsCheckout\Presentation\Presenter\Settings\Admin\Modules\ConfigurationModule' shared service.
     *
     * @return \PsCheckout\Presentation\Presenter\Settings\Admin\Modules\ConfigurationModule
     */
    protected function getConfigurationModuleService()
    {
        return $this->services['PsCheckout\\Presentation\\Presenter\\Settings\\Admin\\Modules\\ConfigurationModule'] = new \PsCheckout\Presentation\Presenter\Settings\Admin\Modules\ConfigurationModule(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->id, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourcePresenter']) ? $this->services['PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourcePresenter'] : $this->getFundingSourcePresenterService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Context']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] = new \PsCheckout\Infrastructure\Adapter\Context())) && false ?: '_'}->getShop()->id);
    }

    /**
     * Gets the public 'PsCheckout\Presentation\Presenter\Settings\Admin\Modules\ContextModule' shared service.
     *
     * @return \PsCheckout\Presentation\Presenter\Settings\Admin\Modules\ContextModule
     */
    protected function getContextModuleService()
    {
        return $this->services['PsCheckout\\Presentation\\Presenter\\Settings\\Admin\\Modules\\ContextModule'] = new \PsCheckout\Presentation\Presenter\Settings\Admin\Modules\ContextModule(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->name, ${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->version, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Context']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] = new \PsCheckout\Infrastructure\Adapter\Context())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Link']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Link'] : $this->getLinkService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Presentation\Presenter\Settings\Admin\Modules\PaypalModule' shared service.
     *
     * @return \PsCheckout\Presentation\Presenter\Settings\Admin\Modules\PaypalModule
     */
    protected function getPaypalModuleService()
    {
        return $this->services['PsCheckout\\Presentation\\Presenter\\Settings\\Admin\\Modules\\PaypalModule'] = new \PsCheckout\Presentation\Presenter\Settings\Admin\Modules\PaypalModule(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Utility\Common\InputStreamUtility' shared service.
     *
     * @return \PsCheckout\Utility\Common\InputStreamUtility
     */
    protected function getInputStreamUtilityService()
    {
        return $this->services['PsCheckout\\Utility\\Common\\InputStreamUtility'] = new \PsCheckout\Utility\Common\InputStreamUtility();
    }

    /**
     * Gets the public 'Psr\Log\LoggerInterface' shared service.
     *
     * @return \Psr\Log\LoggerInterface
     */
    protected function getLoggerInterfaceService()
    {
        return $this->services['Psr\\Log\\LoggerInterface'] = ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Logger\\LoggerFactory']) ? $this->services['PsCheckout\\Infrastructure\\Logger\\LoggerFactory'] : $this->getLoggerFactoryService()) && false ?: '_'}->build();
    }

    /**
     * Gets the public 'ps_checkout.db' shared service.
     *
     * @return \Db
     */
    protected function getPsCheckout_DbService()
    {
        return $this->services['ps_checkout.db'] = \Db::getInstance();
    }

    /**
     * Gets the public 'ps_checkout.module' shared service.
     *
     * @return \ps_checkout
     */
    protected function getPsCheckout_ModuleService()
    {
        return $this->services['ps_checkout.module'] = \Module::getInstanceByName('ps_checkout');
    }
}
