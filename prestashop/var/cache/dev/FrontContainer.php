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
class FrontContainer extends \PrestaShop\PrestaShop\Adapter\Container\LegacyContainer
{
    private $parameters = [];
    private $targetDirs = [];

    public function __construct()
    {
        $this->parameters = $this->getDefaultParameters();

        $this->services = [];
        $this->normalizedIds = [
            'monolog\\handler\\handlerinterface' => 'Monolog\\Handler\\HandlerInterface',
            'prestashop\\module\\prestashopfacebook\\adapter\\configurationadapter' => 'PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter',
            'prestashop\\module\\prestashopfacebook\\adapter\\toolsadapter' => 'PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ToolsAdapter',
            'prestashop\\module\\prestashopfacebook\\api\\client\\facebookcategoryclient' => 'PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookCategoryClient',
            'prestashop\\module\\prestashopfacebook\\api\\client\\facebookclient' => 'PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookClient',
            'prestashop\\module\\prestashopfacebook\\api\\eventsubscriber\\accountsuspendedsubscriber' => 'PrestaShop\\Module\\PrestashopFacebook\\API\\EventSubscriber\\AccountSuspendedSubscriber',
            'prestashop\\module\\prestashopfacebook\\api\\eventsubscriber\\apierrorsubscriber' => 'PrestaShop\\Module\\PrestashopFacebook\\API\\EventSubscriber\\ApiErrorSubscriber',
            'prestashop\\module\\prestashopfacebook\\buffer\\templatebuffer' => 'PrestaShop\\Module\\PrestashopFacebook\\Buffer\\TemplateBuffer',
            'prestashop\\module\\prestashopfacebook\\config\\env' => 'PrestaShop\\Module\\PrestashopFacebook\\Config\\Env',
            'prestashop\\module\\prestashopfacebook\\dispatcher\\eventdispatcher' => 'PrestaShop\\Module\\PrestashopFacebook\\Dispatcher\\EventDispatcher',
            'prestashop\\module\\prestashopfacebook\\factory\\facebookessentialsapiclientfactory' => 'PrestaShop\\Module\\PrestashopFacebook\\Factory\\FacebookEssentialsApiClientFactory',
            'prestashop\\module\\prestashopfacebook\\factory\\psapiclientfactory' => 'PrestaShop\\Module\\PrestashopFacebook\\Factory\\PsApiClientFactory',
            'prestashop\\module\\prestashopfacebook\\handler\\apiconversionhandler' => 'PrestaShop\\Module\\PrestashopFacebook\\Handler\\ApiConversionHandler',
            'prestashop\\module\\prestashopfacebook\\handler\\categorymatchhandler' => 'PrestaShop\\Module\\PrestashopFacebook\\Handler\\CategoryMatchHandler',
            'prestashop\\module\\prestashopfacebook\\handler\\configurationhandler' => 'PrestaShop\\Module\\PrestashopFacebook\\Handler\\ConfigurationHandler',
            'prestashop\\module\\prestashopfacebook\\handler\\errorhandler\\errorhandler' => 'PrestaShop\\Module\\PrestashopFacebook\\Handler\\ErrorHandler\\ErrorHandler',
            'prestashop\\module\\prestashopfacebook\\handler\\eventbusproducthandler' => 'PrestaShop\\Module\\PrestashopFacebook\\Handler\\EventBusProductHandler',
            'prestashop\\module\\prestashopfacebook\\handler\\messengerhandler' => 'PrestaShop\\Module\\PrestashopFacebook\\Handler\\MessengerHandler',
            'prestashop\\module\\prestashopfacebook\\handler\\pixelhandler' => 'PrestaShop\\Module\\PrestashopFacebook\\Handler\\PixelHandler',
            'prestashop\\module\\prestashopfacebook\\handler\\prevalidationscanrefreshhandler' => 'PrestaShop\\Module\\PrestashopFacebook\\Handler\\PrevalidationScanRefreshHandler',
            'prestashop\\module\\prestashopfacebook\\manager\\fbefeaturemanager' => 'PrestaShop\\Module\\PrestashopFacebook\\Manager\\FbeFeatureManager',
            'prestashop\\module\\prestashopfacebook\\presenter\\moduleupgradepresenter' => 'PrestaShop\\Module\\PrestashopFacebook\\Presenter\\ModuleUpgradePresenter',
            'prestashop\\module\\prestashopfacebook\\provider\\accesstokenprovider' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\AccessTokenProvider',
            'prestashop\\module\\prestashopfacebook\\provider\\eventdataprovider' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\EventDataProvider',
            'prestashop\\module\\prestashopfacebook\\provider\\facebookdataprovider' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\FacebookDataProvider',
            'prestashop\\module\\prestashopfacebook\\provider\\fbedataprovider' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\FbeDataProvider',
            'prestashop\\module\\prestashopfacebook\\provider\\fbefeaturedataprovider' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\FbeFeatureDataProvider',
            'prestashop\\module\\prestashopfacebook\\provider\\googlecategoryprovider' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\GoogleCategoryProvider',
            'prestashop\\module\\prestashopfacebook\\provider\\googlecategoryproviderinterface' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\GoogleCategoryProviderInterface',
            'prestashop\\module\\prestashopfacebook\\provider\\multishopdataprovider' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\MultishopDataProvider',
            'prestashop\\module\\prestashopfacebook\\provider\\prevalidationscancacheprovider' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\PrevalidationScanCacheProvider',
            'prestashop\\module\\prestashopfacebook\\provider\\prevalidationscandataprovider' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\PrevalidationScanDataProvider',
            'prestashop\\module\\prestashopfacebook\\provider\\productavailabilityprovider' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductAvailabilityProvider',
            'prestashop\\module\\prestashopfacebook\\provider\\productavailabilityproviderinterface' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductAvailabilityProviderInterface',
            'prestashop\\module\\prestashopfacebook\\provider\\productsyncreportprovider' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductSyncReportProvider',
            'prestashop\\module\\prestashopfacebook\\repository\\googlecategoryrepository' => 'PrestaShop\\Module\\PrestashopFacebook\\Repository\\GoogleCategoryRepository',
            'prestashop\\module\\prestashopfacebook\\repository\\productrepository' => 'PrestaShop\\Module\\PrestashopFacebook\\Repository\\ProductRepository',
            'prestashop\\module\\prestashopfacebook\\repository\\serverinformationrepository' => 'PrestaShop\\Module\\PrestashopFacebook\\Repository\\ServerInformationRepository',
            'prestashop\\module\\prestashopfacebook\\repository\\shoprepository' => 'PrestaShop\\Module\\PrestashopFacebook\\Repository\\ShopRepository',
            'prestashop\\module\\prestashopfacebook\\repository\\tabrepository' => 'PrestaShop\\Module\\PrestashopFacebook\\Repository\\TabRepository',
            'prestashop\\module\\ps_facebook\\tracker\\segment' => 'PrestaShop\\Module\\Ps_facebook\\Tracker\\Segment',
            'prestashop\\module\\psxmarketingwithgoogle\\adapter\\configurationadapter' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter',
            'prestashop\\module\\psxmarketingwithgoogle\\buffer\\templatebuffer' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Buffer\\TemplateBuffer',
            'prestashop\\module\\psxmarketingwithgoogle\\config\\env' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Config\\Env',
            'prestashop\\module\\psxmarketingwithgoogle\\conversion\\enhancedconversiontoggle' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Conversion\\EnhancedConversionToggle',
            'prestashop\\module\\psxmarketingwithgoogle\\conversion\\userdataprovider' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Conversion\\UserDataProvider',
            'prestashop\\module\\psxmarketingwithgoogle\\handler\\errorhandler' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Handler\\ErrorHandler',
            'prestashop\\module\\psxmarketingwithgoogle\\handler\\remarketinghookhandler' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Handler\\RemarketingHookHandler',
            'prestashop\\module\\psxmarketingwithgoogle\\provider\\carteventdataprovider' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\CartEventDataProvider',
            'prestashop\\module\\psxmarketingwithgoogle\\provider\\pagevieweventdataprovider' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\PageViewEventDataProvider',
            'prestashop\\module\\psxmarketingwithgoogle\\provider\\productdataprovider' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\ProductDataProvider',
            'prestashop\\module\\psxmarketingwithgoogle\\provider\\purchaseeventdataprovider' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\PurchaseEventDataProvider',
            'prestashop\\module\\psxmarketingwithgoogle\\provider\\verificationtagdataprovider' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\VerificationTagDataProvider',
            'prestashop\\module\\psxmarketingwithgoogle\\repository\\attributesrepository' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\AttributesRepository',
            'prestashop\\module\\psxmarketingwithgoogle\\repository\\carrierrepository' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CarrierRepository',
            'prestashop\\module\\psxmarketingwithgoogle\\repository\\categoryrepository' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CategoryRepository',
            'prestashop\\module\\psxmarketingwithgoogle\\repository\\countryrepository' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CountryRepository',
            'prestashop\\module\\psxmarketingwithgoogle\\repository\\currencyrepository' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CurrencyRepository',
            'prestashop\\module\\psxmarketingwithgoogle\\repository\\languagerepository' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\LanguageRepository',
            'prestashop\\module\\psxmarketingwithgoogle\\repository\\manufacturerrepository' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\ManufacturerRepository',
            'prestashop\\module\\psxmarketingwithgoogle\\repository\\productrepository' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\ProductRepository',
            'prestashop\\module\\psxmarketingwithgoogle\\repository\\staterepository' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\StateRepository',
            'prestashop\\module\\psxmarketingwithgoogle\\repository\\tabrepository' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\TabRepository',
            'prestashop\\module\\psxmarketingwithgoogle\\repository\\taxrepository' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\TaxRepository',
            'prestashop\\module\\psxmarketingwithgoogle\\repository\\verificationtagrepository' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\VerificationTagRepository',
            'prestashop\\module\\psxmarketingwithgoogle\\tracker\\segment' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Tracker\\Segment',
            'prestashop\\modulelibcachedirectoryprovider\\cache\\cachedirectoryprovider' => 'PrestaShop\\ModuleLibCacheDirectoryProvider\\Cache\\CacheDirectoryProvider',
            'prestashop\\psaccountsinstaller\\installer\\facade\\psaccounts' => 'PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts',
            'prestashop\\psaccountsinstaller\\installer\\installer' => 'PrestaShop\\PsAccountsInstaller\\Installer\\Installer',
            'prestashopbundle\\dependencyinjection\\runtimeconstenvvarprocessor' => 'PrestaShopBundle\\DependencyInjection\\RuntimeConstEnvVarProcessor',
            'prestashopcorp\\billing\\presenter\\billingpresenter' => 'PrestaShopCorp\\Billing\\Presenter\\BillingPresenter',
            'prestashopcorp\\billing\\services\\billingservice' => 'PrestaShopCorp\\Billing\\Services\\BillingService',
            'prestashopcorp\\billing\\wrappers\\billingcontextwrapper' => 'PrestaShopCorp\\Billing\\Wrappers\\BillingContextWrapper',
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
            'pscheckout\\core\\customer\\action\\expresscheckoutaction' => 'PsCheckout\\Core\\Customer\\Action\\ExpressCheckoutAction',
            'pscheckout\\core\\fundingsource\\factory\\fundingsourcetokenfactory' => 'PsCheckout\\Core\\FundingSource\\Factory\\FundingSourceTokenFactory',
            'pscheckout\\core\\order\\action\\createorderaction' => 'PsCheckout\\Core\\Order\\Action\\CreateOrderAction',
            'pscheckout\\core\\order\\action\\createorderpaymentaction' => 'PsCheckout\\Core\\Order\\Action\\CreateOrderPaymentAction',
            'pscheckout\\core\\order\\action\\createvalidateorderdataaction' => 'PsCheckout\\Core\\Order\\Action\\CreateValidateOrderDataAction',
            'pscheckout\\core\\order\\action\\validateorderaction' => 'PsCheckout\\Core\\Order\\Action\\ValidateOrderAction',
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
            'pscheckout\\core\\order\\exception\\handler\\ordercreationexceptionhandler' => 'PsCheckout\\Core\\Order\\Exception\\Handler\\OrderCreationExceptionHandler',
            'pscheckout\\core\\order\\processor\\createorderprocessor' => 'PsCheckout\\Core\\Order\\Processor\\CreateOrderProcessor',
            'pscheckout\\core\\order\\validator\\checkoutvalidator' => 'PsCheckout\\Core\\Order\\Validator\\CheckoutValidator',
            'pscheckout\\core\\order\\validator\\orderamountvalidator' => 'PsCheckout\\Core\\Order\\Validator\\OrderAmountValidator',
            'pscheckout\\core\\order\\validator\\orderauthorizationvalidator' => 'PsCheckout\\Core\\Order\\Validator\\OrderAuthorizationValidator',
            'pscheckout\\core\\orderstate\\action\\changeorderstateaction' => 'PsCheckout\\Core\\OrderState\\Action\\ChangeOrderStateAction',
            'pscheckout\\core\\orderstate\\action\\setcompletedorderstateaction' => 'PsCheckout\\Core\\OrderState\\Action\\SetCompletedOrderStateAction',
            'pscheckout\\core\\orderstate\\action\\setdeclinedorderstateaction' => 'PsCheckout\\Core\\OrderState\\Action\\SetDeclinedOrderStateAction',
            'pscheckout\\core\\orderstate\\action\\setpendingorderstateaction' => 'PsCheckout\\Core\\OrderState\\Action\\SetPendingOrderStateAction',
            'pscheckout\\core\\orderstate\\action\\setrefundedorderstateaction' => 'PsCheckout\\Core\\OrderState\\Action\\SetRefundedOrderStateAction',
            'pscheckout\\core\\orderstate\\action\\setreversedorderstateaction' => 'PsCheckout\\Core\\OrderState\\Action\\SetReversedOrderStateAction',
            'pscheckout\\core\\orderstate\\service\\orderstatemapper' => 'PsCheckout\\Core\\OrderState\\Service\\OrderStateMapper',
            'pscheckout\\core\\paymenttoken\\action\\deletepaymenttokenaction' => 'PsCheckout\\Core\\PaymentToken\\Action\\DeletePaymentTokenAction',
            'pscheckout\\core\\paymenttoken\\action\\savepaymenttokenaction' => 'PsCheckout\\Core\\PaymentToken\\Action\\SavePaymentTokenAction',
            'pscheckout\\core\\paypal\\applepay\\builder\\applepaypaymentrequestdatabuilder' => 'PsCheckout\\Core\\PayPal\\ApplePay\\Builder\\ApplePayPaymentRequestDataBuilder',
            'pscheckout\\core\\paypal\\card3dsecure\\card3dsecurevalidator' => 'PsCheckout\\Core\\PayPal\\Card3DSecure\\Card3DSecureValidator',
            'pscheckout\\core\\paypal\\googlepay\\builder\\googlepaypaymentrequestdatabuilder' => 'PsCheckout\\Core\\PayPal\\GooglePay\\Builder\\GooglePayPaymentRequestDataBuilder',
            'pscheckout\\core\\paypal\\oauth\\oauthservice' => 'PsCheckout\\Core\\PayPal\\OAuth\\OAuthService',
            'pscheckout\\core\\paypal\\order\\action\\cancelpaypalorderaction' => 'PsCheckout\\Core\\PayPal\\Order\\Action\\CancelPayPalOrderAction',
            'pscheckout\\core\\paypal\\order\\action\\capturepaypalorderaction' => 'PsCheckout\\Core\\PayPal\\Order\\Action\\CapturePayPalOrderAction',
            'pscheckout\\core\\paypal\\order\\action\\createpaypalorderaction' => 'PsCheckout\\Core\\PayPal\\Order\\Action\\CreatePayPalOrderAction',
            'pscheckout\\core\\paypal\\order\\action\\refundpaypalorderaction' => 'PsCheckout\\Core\\PayPal\\Order\\Action\\RefundPayPalOrderAction',
            'pscheckout\\core\\paypal\\order\\action\\updatepaypalorderpurchaseunitaction' => 'PsCheckout\\Core\\PayPal\\Order\\Action\\UpdatePayPalOrderPurchaseUnitAction',
            'pscheckout\\core\\paypal\\order\\cache\\paypalordercache' => 'PsCheckout\\Core\\PayPal\\Order\\Cache\\PayPalOrderCache',
            'pscheckout\\core\\paypal\\order\\handler\\orderapprovalreversedeventhandler' => 'PsCheckout\\Core\\PayPal\\Order\\Handler\\OrderApprovalReversedEventHandler',
            'pscheckout\\core\\paypal\\order\\handler\\orderapprovedeventhandler' => 'PsCheckout\\Core\\PayPal\\Order\\Handler\\OrderApprovedEventHandler',
            'pscheckout\\core\\paypal\\order\\handler\\ordercompletedeventhandler' => 'PsCheckout\\Core\\PayPal\\Order\\Handler\\OrderCompletedEventHandler',
            'pscheckout\\core\\paypal\\order\\handler\\paymentcompletedeventhandler' => 'PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentCompletedEventHandler',
            'pscheckout\\core\\paypal\\order\\handler\\paymentdeniedeventhandler' => 'PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentDeniedEventHandler',
            'pscheckout\\core\\paypal\\order\\handler\\paymentpendingeventhandler' => 'PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentPendingEventHandler',
            'pscheckout\\core\\paypal\\order\\handler\\paymentrefundedeventhandler' => 'PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentRefundedEventHandler',
            'pscheckout\\core\\paypal\\order\\handler\\paymentreversedeventhandler' => 'PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentReversedEventHandler',
            'pscheckout\\core\\paypal\\order\\handler\\paypaleventdispatcher' => 'PsCheckout\\Core\\PayPal\\Order\\Handler\\PayPalEventDispatcher',
            'pscheckout\\core\\paypal\\order\\processor\\createpaypalorderprocessor' => 'PsCheckout\\Core\\PayPal\\Order\\Processor\\CreatePayPalOrderProcessor',
            'pscheckout\\core\\paypal\\order\\processor\\updateexternalpaypalorderprocessor' => 'PsCheckout\\Core\\PayPal\\Order\\Processor\\UpdateExternalPayPalOrderProcessor',
            'pscheckout\\core\\paypal\\order\\provider\\paypalorderprovider' => 'PsCheckout\\Core\\PayPal\\Order\\Provider\\PayPalOrderProvider',
            'pscheckout\\core\\paypal\\order\\provider\\paypalordertranslationprovider' => 'PsCheckout\\Core\\PayPal\\Order\\Provider\\PayPalOrderTranslationProvider',
            'pscheckout\\core\\paypal\\order\\validator\\createdpaypalordervalidator' => 'PsCheckout\\Core\\PayPal\\Order\\Validator\\CreatedPayPalOrderValidator',
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
            'pscheckout\\core\\settings\\configuration\\paypalsdkconfiguration' => 'PsCheckout\\Core\\Settings\\Configuration\\PayPalSdkConfiguration',
            'pscheckout\\core\\webhook\\handler\\webhookeventconfigurationupdatedhandler' => 'PsCheckout\\Core\\Webhook\\Handler\\WebhookEventConfigurationUpdatedHandler',
            'pscheckout\\core\\webhook\\handler\\webhookhandler' => 'PsCheckout\\Core\\Webhook\\Handler\\WebhookHandler',
            'pscheckout\\core\\webhook\\service\\webhooksecrettoken' => 'PsCheckout\\Core\\Webhook\\Service\\WebhookSecretToken',
            'pscheckout\\core\\webhookdispatcher\\action\\checkpslsignatureaction' => 'PsCheckout\\Core\\WebhookDispatcher\\Action\\CheckPSLSignatureAction',
            'pscheckout\\core\\webhookdispatcher\\provider\\webhookbodyprovider' => 'PsCheckout\\Core\\WebhookDispatcher\\Provider\\WebhookBodyProvider',
            'pscheckout\\core\\webhookdispatcher\\provider\\webhookheaderprovider' => 'PsCheckout\\Core\\WebhookDispatcher\\Provider\\WebhookHeaderProvider',
            'pscheckout\\core\\webhookdispatcher\\validator\\bodyvaluesvalidator' => 'PsCheckout\\Core\\WebhookDispatcher\\Validator\\BodyValuesValidator',
            'pscheckout\\core\\webhookdispatcher\\validator\\headervaluesvalidator' => 'PsCheckout\\Core\\WebhookDispatcher\\Validator\\HeaderValuesValidator',
            'pscheckout\\core\\webhookdispatcher\\validator\\webhookshopidvalidator' => 'PsCheckout\\Core\\WebhookDispatcher\\Validator\\WebhookShopIdValidator',
            'pscheckout\\infrastructure\\action\\addproducttocartaction' => 'PsCheckout\\Infrastructure\\Action\\AddProductToCartAction',
            'pscheckout\\infrastructure\\action\\createorupdateaddressaction' => 'PsCheckout\\Infrastructure\\Action\\CreateOrUpdateAddressAction',
            'pscheckout\\infrastructure\\action\\customerauthenticationaction' => 'PsCheckout\\Infrastructure\\Action\\CustomerAuthenticationAction',
            'pscheckout\\infrastructure\\action\\customernotifyaction' => 'PsCheckout\\Infrastructure\\Action\\CustomerNotifyAction',
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
            'pscheckout\\infrastructure\\repository\\staterepository' => 'PsCheckout\\Infrastructure\\Repository\\StateRepository',
            'pscheckout\\infrastructure\\validator\\frontcontrollervalidator' => 'PsCheckout\\Infrastructure\\Validator\\FrontControllerValidator',
            'pscheckout\\infrastructure\\validator\\merchantvalidator' => 'PsCheckout\\Infrastructure\\Validator\\MerchantValidator',
            'pscheckout\\module\\presentation\\translator' => 'PsCheckout\\Module\\Presentation\\Translator',
            'pscheckout\\presentation\\presenter\\cart\\cartpresenter' => 'PsCheckout\\Presentation\\Presenter\\Cart\\CartPresenter',
            'pscheckout\\presentation\\presenter\\fundingsource\\fundingsourcepresenter' => 'PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourcePresenter',
            'pscheckout\\presentation\\presenter\\fundingsource\\fundingsourcetokenpresenter' => 'PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourceTokenPresenter',
            'pscheckout\\presentation\\presenter\\fundingsource\\fundingsourcetranslationprovider' => 'PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourceTranslationProvider',
            'pscheckout\\presentation\\presenter\\fundingsource\\logopresenter' => 'PsCheckout\\Presentation\\Presenter\\FundingSource\\LogoPresenter',
            'pscheckout\\presentation\\presenter\\ordersummary\\ordersummarypresenter' => 'PsCheckout\\Presentation\\Presenter\\OrderSummary\\OrderSummaryPresenter',
            'pscheckout\\presentation\\presenter\\settings\\front\\frontsettingspresenter' => 'PsCheckout\\Presentation\\Presenter\\Settings\\Front\\FrontSettingsPresenter',
            'pscheckout\\presentation\\presenter\\settings\\front\\modules\\configurationmodule' => 'PsCheckout\\Presentation\\Presenter\\Settings\\Front\\Modules\\ConfigurationModule',
            'pscheckout\\presentation\\presenter\\settings\\front\\modules\\linkmodule' => 'PsCheckout\\Presentation\\Presenter\\Settings\\Front\\Modules\\LinkModule',
            'pscheckout\\presentation\\presenter\\settings\\front\\modules\\mediamodule' => 'PsCheckout\\Presentation\\Presenter\\Settings\\Front\\Modules\\MediaModule',
            'pscheckout\\presentation\\presenter\\settings\\front\\modules\\paypalmodule' => 'PsCheckout\\Presentation\\Presenter\\Settings\\Front\\Modules\\PayPalModule',
            'pscheckout\\presentation\\presenter\\settings\\front\\modules\\translationmodule' => 'PsCheckout\\Presentation\\Presenter\\Settings\\Front\\Modules\\TranslationModule',
            'pscheckout\\presentation\\presenter\\settings\\front\\supportedcardbrandspresenter' => 'PsCheckout\\Presentation\\Presenter\\Settings\\Front\\SupportedCardBrandsPresenter',
            'pscheckout\\utility\\common\\inputstreamutility' => 'PsCheckout\\Utility\\Common\\InputStreamUtility',
            'psr\\log\\loggerinterface' => 'Psr\\Log\\LoggerInterface',
        ];
        $this->syntheticIds = [
            'employee' => true,
            'shop' => true,
        ];
        $this->methodMap = [
            'Monolog\\Handler\\HandlerInterface' => 'getHandlerInterfaceService',
            'PrestaShopBundle\\DependencyInjection\\RuntimeConstEnvVarProcessor' => 'getRuntimeConstEnvVarProcessorService',
            'PrestaShopCorp\\Billing\\Presenter\\BillingPresenter' => 'getBillingPresenterService',
            'PrestaShopCorp\\Billing\\Services\\BillingService' => 'getBillingServiceService',
            'PrestaShopCorp\\Billing\\Wrappers\\BillingContextWrapper' => 'getBillingContextWrapperService',
            'PrestaShop\\ModuleLibCacheDirectoryProvider\\Cache\\CacheDirectoryProvider' => 'getCacheDirectoryProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookCategoryClient' => 'getFacebookCategoryClientService',
            'PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookClient' => 'getFacebookClientService',
            'PrestaShop\\Module\\PrestashopFacebook\\API\\EventSubscriber\\AccountSuspendedSubscriber' => 'getAccountSuspendedSubscriberService',
            'PrestaShop\\Module\\PrestashopFacebook\\API\\EventSubscriber\\ApiErrorSubscriber' => 'getApiErrorSubscriberService',
            'PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter' => 'getConfigurationAdapterService',
            'PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ToolsAdapter' => 'getToolsAdapterService',
            'PrestaShop\\Module\\PrestashopFacebook\\Buffer\\TemplateBuffer' => 'getTemplateBufferService',
            'PrestaShop\\Module\\PrestashopFacebook\\Config\\Env' => 'getEnvService',
            'PrestaShop\\Module\\PrestashopFacebook\\Dispatcher\\EventDispatcher' => 'getEventDispatcherService',
            'PrestaShop\\Module\\PrestashopFacebook\\Factory\\FacebookEssentialsApiClientFactory' => 'getFacebookEssentialsApiClientFactoryService',
            'PrestaShop\\Module\\PrestashopFacebook\\Factory\\PsApiClientFactory' => 'getPsApiClientFactoryService',
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\ApiConversionHandler' => 'getApiConversionHandlerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\CategoryMatchHandler' => 'getCategoryMatchHandlerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\ConfigurationHandler' => 'getConfigurationHandlerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\ErrorHandler\\ErrorHandler' => 'getErrorHandlerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\EventBusProductHandler' => 'getEventBusProductHandlerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\MessengerHandler' => 'getMessengerHandlerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\PixelHandler' => 'getPixelHandlerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\PrevalidationScanRefreshHandler' => 'getPrevalidationScanRefreshHandlerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Manager\\FbeFeatureManager' => 'getFbeFeatureManagerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Presenter\\ModuleUpgradePresenter' => 'getModuleUpgradePresenterService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\AccessTokenProvider' => 'getAccessTokenProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\EventDataProvider' => 'getEventDataProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\FacebookDataProvider' => 'getFacebookDataProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\FbeDataProvider' => 'getFbeDataProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\FbeFeatureDataProvider' => 'getFbeFeatureDataProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\GoogleCategoryProvider' => 'getGoogleCategoryProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\MultishopDataProvider' => 'getMultishopDataProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\PrevalidationScanCacheProvider' => 'getPrevalidationScanCacheProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\PrevalidationScanDataProvider' => 'getPrevalidationScanDataProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductAvailabilityProvider' => 'getProductAvailabilityProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductSyncReportProvider' => 'getProductSyncReportProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Repository\\GoogleCategoryRepository' => 'getGoogleCategoryRepositoryService',
            'PrestaShop\\Module\\PrestashopFacebook\\Repository\\ProductRepository' => 'getProductRepositoryService',
            'PrestaShop\\Module\\PrestashopFacebook\\Repository\\ServerInformationRepository' => 'getServerInformationRepositoryService',
            'PrestaShop\\Module\\PrestashopFacebook\\Repository\\ShopRepository' => 'getShopRepositoryService',
            'PrestaShop\\Module\\PrestashopFacebook\\Repository\\TabRepository' => 'getTabRepositoryService',
            'PrestaShop\\Module\\Ps_facebook\\Tracker\\Segment' => 'getSegmentService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter' => 'getConfigurationAdapter2Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Buffer\\TemplateBuffer' => 'getTemplateBuffer2Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Config\\Env' => 'getEnv2Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Conversion\\EnhancedConversionToggle' => 'getEnhancedConversionToggleService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Conversion\\UserDataProvider' => 'getUserDataProviderService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Handler\\ErrorHandler' => 'getErrorHandler2Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Handler\\RemarketingHookHandler' => 'getRemarketingHookHandlerService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\CartEventDataProvider' => 'getCartEventDataProviderService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\PageViewEventDataProvider' => 'getPageViewEventDataProviderService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\ProductDataProvider' => 'getProductDataProviderService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\PurchaseEventDataProvider' => 'getPurchaseEventDataProviderService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\VerificationTagDataProvider' => 'getVerificationTagDataProviderService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\AttributesRepository' => 'getAttributesRepositoryService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CarrierRepository' => 'getCarrierRepositoryService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CategoryRepository' => 'getCategoryRepositoryService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CountryRepository' => 'getCountryRepositoryService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CurrencyRepository' => 'getCurrencyRepositoryService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\LanguageRepository' => 'getLanguageRepositoryService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\ManufacturerRepository' => 'getManufacturerRepositoryService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\ProductRepository' => 'getProductRepository2Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\StateRepository' => 'getStateRepositoryService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\TabRepository' => 'getTabRepository2Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\TaxRepository' => 'getTaxRepositoryService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\VerificationTagRepository' => 'getVerificationTagRepositoryService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Tracker\\Segment' => 'getSegment2Service',
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
            'PsCheckout\\Core\\Customer\\Action\\ExpressCheckoutAction' => 'getExpressCheckoutActionService',
            'PsCheckout\\Core\\FundingSource\\Factory\\FundingSourceTokenFactory' => 'getFundingSourceTokenFactoryService',
            'PsCheckout\\Core\\OrderState\\Action\\ChangeOrderStateAction' => 'getChangeOrderStateActionService',
            'PsCheckout\\Core\\OrderState\\Action\\SetCompletedOrderStateAction' => 'getSetCompletedOrderStateActionService',
            'PsCheckout\\Core\\OrderState\\Action\\SetDeclinedOrderStateAction' => 'getSetDeclinedOrderStateActionService',
            'PsCheckout\\Core\\OrderState\\Action\\SetPendingOrderStateAction' => 'getSetPendingOrderStateActionService',
            'PsCheckout\\Core\\OrderState\\Action\\SetRefundedOrderStateAction' => 'getSetRefundedOrderStateActionService',
            'PsCheckout\\Core\\OrderState\\Action\\SetReversedOrderStateAction' => 'getSetReversedOrderStateActionService',
            'PsCheckout\\Core\\OrderState\\Service\\OrderStateMapper' => 'getOrderStateMapperService',
            'PsCheckout\\Core\\Order\\Action\\CreateOrderAction' => 'getCreateOrderActionService',
            'PsCheckout\\Core\\Order\\Action\\CreateOrderPaymentAction' => 'getCreateOrderPaymentActionService',
            'PsCheckout\\Core\\Order\\Action\\CreateValidateOrderDataAction' => 'getCreateValidateOrderDataActionService',
            'PsCheckout\\Core\\Order\\Action\\ValidateOrderAction' => 'getValidateOrderActionService',
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
            'PsCheckout\\Core\\Order\\Exception\\Handler\\OrderCreationExceptionHandler' => 'getOrderCreationExceptionHandlerService',
            'PsCheckout\\Core\\Order\\Processor\\CreateOrderProcessor' => 'getCreateOrderProcessorService',
            'PsCheckout\\Core\\Order\\Validator\\CheckoutValidator' => 'getCheckoutValidatorService',
            'PsCheckout\\Core\\Order\\Validator\\OrderAmountValidator' => 'getOrderAmountValidatorService',
            'PsCheckout\\Core\\Order\\Validator\\OrderAuthorizationValidator' => 'getOrderAuthorizationValidatorService',
            'PsCheckout\\Core\\PayPal\\ApplePay\\Builder\\ApplePayPaymentRequestDataBuilder' => 'getApplePayPaymentRequestDataBuilderService',
            'PsCheckout\\Core\\PayPal\\Card3DSecure\\Card3DSecureValidator' => 'getCard3DSecureValidatorService',
            'PsCheckout\\Core\\PayPal\\GooglePay\\Builder\\GooglePayPaymentRequestDataBuilder' => 'getGooglePayPaymentRequestDataBuilderService',
            'PsCheckout\\Core\\PayPal\\OAuth\\OAuthService' => 'getOAuthServiceService',
            'PsCheckout\\Core\\PayPal\\OrderStatus\\Action\\PayPalCheckOrderStatusAction' => 'getPayPalCheckOrderStatusActionService',
            'PsCheckout\\Core\\PayPal\\Order\\Action\\CancelPayPalOrderAction' => 'getCancelPayPalOrderActionService',
            'PsCheckout\\Core\\PayPal\\Order\\Action\\CapturePayPalOrderAction' => 'getCapturePayPalOrderActionService',
            'PsCheckout\\Core\\PayPal\\Order\\Action\\CreatePayPalOrderAction' => 'getCreatePayPalOrderActionService',
            'PsCheckout\\Core\\PayPal\\Order\\Action\\RefundPayPalOrderAction' => 'getRefundPayPalOrderActionService',
            'PsCheckout\\Core\\PayPal\\Order\\Action\\UpdatePayPalOrderPurchaseUnitAction' => 'getUpdatePayPalOrderPurchaseUnitActionService',
            'PsCheckout\\Core\\PayPal\\Order\\Cache\\PayPalOrderCache' => 'getPayPalOrderCacheService',
            'PsCheckout\\Core\\PayPal\\Order\\Handler\\OrderApprovalReversedEventHandler' => 'getOrderApprovalReversedEventHandlerService',
            'PsCheckout\\Core\\PayPal\\Order\\Handler\\OrderApprovedEventHandler' => 'getOrderApprovedEventHandlerService',
            'PsCheckout\\Core\\PayPal\\Order\\Handler\\OrderCompletedEventHandler' => 'getOrderCompletedEventHandlerService',
            'PsCheckout\\Core\\PayPal\\Order\\Handler\\PayPalEventDispatcher' => 'getPayPalEventDispatcherService',
            'PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentCompletedEventHandler' => 'getPaymentCompletedEventHandlerService',
            'PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentDeniedEventHandler' => 'getPaymentDeniedEventHandlerService',
            'PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentPendingEventHandler' => 'getPaymentPendingEventHandlerService',
            'PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentRefundedEventHandler' => 'getPaymentRefundedEventHandlerService',
            'PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentReversedEventHandler' => 'getPaymentReversedEventHandlerService',
            'PsCheckout\\Core\\PayPal\\Order\\Processor\\CreatePayPalOrderProcessor' => 'getCreatePayPalOrderProcessorService',
            'PsCheckout\\Core\\PayPal\\Order\\Processor\\UpdateExternalPayPalOrderProcessor' => 'getUpdateExternalPayPalOrderProcessorService',
            'PsCheckout\\Core\\PayPal\\Order\\Provider\\PayPalOrderProvider' => 'getPayPalOrderProviderService',
            'PsCheckout\\Core\\PayPal\\Order\\Provider\\PayPalOrderTranslationProvider' => 'getPayPalOrderTranslationProviderService',
            'PsCheckout\\Core\\PayPal\\Order\\Validator\\CreatedPayPalOrderValidator' => 'getCreatedPayPalOrderValidatorService',
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
            'PsCheckout\\Core\\PaymentToken\\Action\\SavePaymentTokenAction' => 'getSavePaymentTokenActionService',
            'PsCheckout\\Core\\Settings\\Configuration\\PayPalConfiguration' => 'getPayPalConfigurationService',
            'PsCheckout\\Core\\Settings\\Configuration\\PayPalSdkConfiguration' => 'getPayPalSdkConfigurationService',
            'PsCheckout\\Core\\WebhookDispatcher\\Action\\CheckPSLSignatureAction' => 'getCheckPSLSignatureActionService',
            'PsCheckout\\Core\\WebhookDispatcher\\Provider\\WebhookBodyProvider' => 'getWebhookBodyProviderService',
            'PsCheckout\\Core\\WebhookDispatcher\\Provider\\WebhookHeaderProvider' => 'getWebhookHeaderProviderService',
            'PsCheckout\\Core\\WebhookDispatcher\\Validator\\BodyValuesValidator' => 'getBodyValuesValidatorService',
            'PsCheckout\\Core\\WebhookDispatcher\\Validator\\HeaderValuesValidator' => 'getHeaderValuesValidatorService',
            'PsCheckout\\Core\\WebhookDispatcher\\Validator\\WebhookShopIdValidator' => 'getWebhookShopIdValidatorService',
            'PsCheckout\\Core\\Webhook\\Handler\\WebhookEventConfigurationUpdatedHandler' => 'getWebhookEventConfigurationUpdatedHandlerService',
            'PsCheckout\\Core\\Webhook\\Handler\\WebhookHandler' => 'getWebhookHandlerService',
            'PsCheckout\\Core\\Webhook\\Service\\WebhookSecretToken' => 'getWebhookSecretTokenService',
            'PsCheckout\\Infrastructure\\Action\\AddProductToCartAction' => 'getAddProductToCartActionService',
            'PsCheckout\\Infrastructure\\Action\\CreateOrUpdateAddressAction' => 'getCreateOrUpdateAddressActionService',
            'PsCheckout\\Infrastructure\\Action\\CustomerAuthenticationAction' => 'getCustomerAuthenticationActionService',
            'PsCheckout\\Infrastructure\\Action\\CustomerNotifyAction' => 'getCustomerNotifyActionService',
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
            'PsCheckout\\Infrastructure\\Environment\\Env' => 'getEnv3Service',
            'PsCheckout\\Infrastructure\\Environment\\EnvLoader' => 'getEnvLoaderService',
            'PsCheckout\\Infrastructure\\Logger\\LoggerFactory' => 'getLoggerFactoryService',
            'PsCheckout\\Infrastructure\\Logger\\LoggerFileFinder' => 'getLoggerFileFinderService',
            'PsCheckout\\Infrastructure\\Logger\\LoggerFileReader' => 'getLoggerFileReaderService',
            'PsCheckout\\Infrastructure\\Logger\\LoggerHandlerFactory' => 'getLoggerHandlerFactoryService',
            'PsCheckout\\Infrastructure\\Repository\\AddressRepository' => 'getAddressRepositoryService',
            'PsCheckout\\Infrastructure\\Repository\\CartRepository' => 'getCartRepositoryService',
            'PsCheckout\\Infrastructure\\Repository\\ConfigurationRepository' => 'getConfigurationRepositoryService',
            'PsCheckout\\Infrastructure\\Repository\\CountryRepository' => 'getCountryRepository2Service',
            'PsCheckout\\Infrastructure\\Repository\\CurrencyRepository' => 'getCurrencyRepository2Service',
            'PsCheckout\\Infrastructure\\Repository\\CustomerRepository' => 'getCustomerRepositoryService',
            'PsCheckout\\Infrastructure\\Repository\\FundingSourceRepository' => 'getFundingSourceRepositoryService',
            'PsCheckout\\Infrastructure\\Repository\\GenderRepository' => 'getGenderRepositoryService',
            'PsCheckout\\Infrastructure\\Repository\\LanguageRepository' => 'getLanguageRepository2Service',
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
            'PsCheckout\\Infrastructure\\Repository\\StateRepository' => 'getStateRepository2Service',
            'PsCheckout\\Infrastructure\\Validator\\FrontControllerValidator' => 'getFrontControllerValidatorService',
            'PsCheckout\\Infrastructure\\Validator\\MerchantValidator' => 'getMerchantValidatorService',
            'PsCheckout\\Module\\Presentation\\Translator' => 'getTranslatorService',
            'PsCheckout\\Presentation\\Presenter\\Cart\\CartPresenter' => 'getCartPresenterService',
            'PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourcePresenter' => 'getFundingSourcePresenterService',
            'PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourceTokenPresenter' => 'getFundingSourceTokenPresenterService',
            'PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourceTranslationProvider' => 'getFundingSourceTranslationProviderService',
            'PsCheckout\\Presentation\\Presenter\\FundingSource\\LogoPresenter' => 'getLogoPresenterService',
            'PsCheckout\\Presentation\\Presenter\\OrderSummary\\OrderSummaryPresenter' => 'getOrderSummaryPresenterService',
            'PsCheckout\\Presentation\\Presenter\\Settings\\Front\\FrontSettingsPresenter' => 'getFrontSettingsPresenterService',
            'PsCheckout\\Presentation\\Presenter\\Settings\\Front\\Modules\\ConfigurationModule' => 'getConfigurationModuleService',
            'PsCheckout\\Presentation\\Presenter\\Settings\\Front\\Modules\\LinkModule' => 'getLinkModuleService',
            'PsCheckout\\Presentation\\Presenter\\Settings\\Front\\Modules\\MediaModule' => 'getMediaModuleService',
            'PsCheckout\\Presentation\\Presenter\\Settings\\Front\\Modules\\PayPalModule' => 'getPayPalModuleService',
            'PsCheckout\\Presentation\\Presenter\\Settings\\Front\\Modules\\TranslationModule' => 'getTranslationModuleService',
            'PsCheckout\\Presentation\\Presenter\\Settings\\Front\\SupportedCardBrandsPresenter' => 'getSupportedCardBrandsPresenterService',
            'PsCheckout\\Utility\\Common\\InputStreamUtility' => 'getInputStreamUtilityService',
            'Psr\\Log\\LoggerInterface' => 'getLoggerInterfaceService',
            'annotation_reader' => 'getAnnotationReaderService',
            'cache.doctrine.orm.default.metadata' => 'getCache_Doctrine_Orm_Default_MetadataService',
            'cache.doctrine.orm.default.query' => 'getCache_Doctrine_Orm_Default_QueryService',
            'cache.doctrine.orm.default.result' => 'getCache_Doctrine_Orm_Default_ResultService',
            'configuration' => 'getConfiguration2Service',
            'container.env_var_processors_locator' => 'getContainer_EnvVarProcessorsLocatorService',
            'context' => 'getContext2Service',
            'db' => 'getDbService',
            'doctrine' => 'getDoctrineService',
            'doctrine.cache_clear_metadata_command' => 'getDoctrine_CacheClearMetadataCommandService',
            'doctrine.cache_clear_query_cache_command' => 'getDoctrine_CacheClearQueryCacheCommandService',
            'doctrine.cache_clear_result_command' => 'getDoctrine_CacheClearResultCommandService',
            'doctrine.cache_collection_region_command' => 'getDoctrine_CacheCollectionRegionCommandService',
            'doctrine.clear_entity_region_command' => 'getDoctrine_ClearEntityRegionCommandService',
            'doctrine.clear_query_region_command' => 'getDoctrine_ClearQueryRegionCommandService',
            'doctrine.database_create_command' => 'getDoctrine_DatabaseCreateCommandService',
            'doctrine.database_drop_command' => 'getDoctrine_DatabaseDropCommandService',
            'doctrine.database_import_command' => 'getDoctrine_DatabaseImportCommandService',
            'doctrine.dbal.connection_factory' => 'getDoctrine_Dbal_ConnectionFactoryService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.ensure_production_settings_command' => 'getDoctrine_EnsureProductionSettingsCommandService',
            'doctrine.generate_entities_command' => 'getDoctrine_GenerateEntitiesCommandService',
            'doctrine.mapping_convert_command' => 'getDoctrine_MappingConvertCommandService',
            'doctrine.mapping_import_command' => 'getDoctrine_MappingImportCommandService',
            'doctrine.mapping_info_command' => 'getDoctrine_MappingInfoCommandService',
            'doctrine.orm.cache.provider.cache.doctrine.orm.default.metadata' => 'getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_MetadataService',
            'doctrine.orm.cache.provider.cache.doctrine.orm.default.query' => 'getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_QueryService',
            'doctrine.orm.cache.provider.cache.doctrine.orm.default.result' => 'getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_ResultService',
            'doctrine.orm.default_entity_listener_resolver' => 'getDoctrine_Orm_DefaultEntityListenerResolverService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'doctrine.orm.default_entity_manager.property_info_extractor' => 'getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService',
            'doctrine.orm.default_listeners.attach_entity_listeners' => 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService',
            'doctrine.orm.default_manager_configurator' => 'getDoctrine_Orm_DefaultManagerConfiguratorService',
            'doctrine.orm.validator.unique' => 'getDoctrine_Orm_Validator_UniqueService',
            'doctrine.orm.validator_initializer' => 'getDoctrine_Orm_ValidatorInitializerService',
            'doctrine.query_dql_command' => 'getDoctrine_QueryDqlCommandService',
            'doctrine.query_sql_command' => 'getDoctrine_QuerySqlCommandService',
            'doctrine.schema_create_command' => 'getDoctrine_SchemaCreateCommandService',
            'doctrine.schema_drop_command' => 'getDoctrine_SchemaDropCommandService',
            'doctrine.schema_update_command' => 'getDoctrine_SchemaUpdateCommandService',
            'doctrine.schema_validate_command' => 'getDoctrine_SchemaValidateCommandService',
            'doctrine_cache.contains_command' => 'getDoctrineCache_ContainsCommandService',
            'doctrine_cache.delete_command' => 'getDoctrineCache_DeleteCommandService',
            'doctrine_cache.flush_command' => 'getDoctrineCache_FlushCommandService',
            'doctrine_cache.stats_command' => 'getDoctrineCache_StatsCommandService',
            'form.type.entity' => 'getForm_Type_EntityService',
            'form.type_guesser.doctrine' => 'getForm_TypeGuesser_DoctrineService',
            'hashing' => 'getHashingService',
            'prestashop.adapter.context_state_manager' => 'getPrestashop_Adapter_ContextStateManagerService',
            'prestashop.adapter.data_provider.country' => 'getPrestashop_Adapter_DataProvider_CountryService',
            'prestashop.adapter.data_provider.currency' => 'getPrestashop_Adapter_DataProvider_CurrencyService',
            'prestashop.adapter.environment' => 'getPrestashop_Adapter_EnvironmentService',
            'prestashop.adapter.legacy.configuration' => 'getPrestashop_Adapter_Legacy_ConfigurationService',
            'prestashop.adapter.legacy.context' => 'getPrestashop_Adapter_Legacy_ContextService',
            'prestashop.adapter.module.repository.module_repository' => 'getPrestashop_Adapter_Module_Repository_ModuleRepositoryService',
            'prestashop.adapter.tools' => 'getPrestashop_Adapter_ToolsService',
            'prestashop.adapter.validate' => 'getPrestashop_Adapter_ValidateService',
            'prestashop.core.circuit_breaker.advanced_factory' => 'getPrestashop_Core_CircuitBreaker_AdvancedFactoryService',
            'prestashop.core.circuit_breaker.doctrine_cache' => 'getPrestashop_Core_CircuitBreaker_DoctrineCacheService',
            'prestashop.core.circuit_breaker.guzzle.cache_storage' => 'getPrestashop_Core_CircuitBreaker_Guzzle_CacheStorageService',
            'prestashop.core.circuit_breaker.guzzle.cache_subscriber' => 'getPrestashop_Core_CircuitBreaker_Guzzle_CacheSubscriberService',
            'prestashop.core.circuit_breaker.guzzle.cache_subscriber_factory' => 'getPrestashop_Core_CircuitBreaker_Guzzle_CacheSubscriberFactoryService',
            'prestashop.core.circuit_breaker.storage' => 'getPrestashop_Core_CircuitBreaker_StorageService',
            'prestashop.core.filter.front_end_object.cart' => 'getPrestashop_Core_Filter_FrontEndObject_CartService',
            'prestashop.core.filter.front_end_object.configuration' => 'getPrestashop_Core_Filter_FrontEndObject_ConfigurationService',
            'prestashop.core.filter.front_end_object.customer' => 'getPrestashop_Core_Filter_FrontEndObject_CustomerService',
            'prestashop.core.filter.front_end_object.main' => 'getPrestashop_Core_Filter_FrontEndObject_MainService',
            'prestashop.core.filter.front_end_object.product' => 'getPrestashop_Core_Filter_FrontEndObject_ProductService',
            'prestashop.core.filter.front_end_object.product_collection' => 'getPrestashop_Core_Filter_FrontEndObject_ProductCollectionService',
            'prestashop.core.filter.front_end_object.search_result_product' => 'getPrestashop_Core_Filter_FrontEndObject_SearchResultProductService',
            'prestashop.core.filter.front_end_object.search_result_product_collection' => 'getPrestashop_Core_Filter_FrontEndObject_SearchResultProductCollectionService',
            'prestashop.core.filter.front_end_object.shop' => 'getPrestashop_Core_Filter_FrontEndObject_ShopService',
            'prestashop.core.localization.cache.adapter' => 'getPrestashop_Core_Localization_Cache_AdapterService',
            'prestashop.core.localization.cldr.cache.adapter' => 'getPrestashop_Core_Localization_Cldr_Cache_AdapterService',
            'prestashop.core.localization.cldr.datalayer.locale_cache' => 'getPrestashop_Core_Localization_Cldr_Datalayer_LocaleCacheService',
            'prestashop.core.localization.cldr.datalayer.locale_reference' => 'getPrestashop_Core_Localization_Cldr_Datalayer_LocaleReferenceService',
            'prestashop.core.localization.cldr.locale_data_source' => 'getPrestashop_Core_Localization_Cldr_LocaleDataSourceService',
            'prestashop.core.localization.cldr.locale_repository' => 'getPrestashop_Core_Localization_Cldr_LocaleRepositoryService',
            'prestashop.core.localization.cldr.reader' => 'getPrestashop_Core_Localization_Cldr_ReaderService',
            'prestashop.core.localization.currency.datasource' => 'getPrestashop_Core_Localization_Currency_DatasourceService',
            'prestashop.core.localization.currency.middleware.cache' => 'getPrestashop_Core_Localization_Currency_Middleware_CacheService',
            'prestashop.core.localization.currency.middleware.database' => 'getPrestashop_Core_Localization_Currency_Middleware_DatabaseService',
            'prestashop.core.localization.currency.middleware.installed' => 'getPrestashop_Core_Localization_Currency_Middleware_InstalledService',
            'prestashop.core.localization.currency.middleware.reference' => 'getPrestashop_Core_Localization_Currency_Middleware_ReferenceService',
            'prestashop.core.localization.currency.repository' => 'getPrestashop_Core_Localization_Currency_RepositoryService',
            'prestashop.core.localization.locale.context_locale' => 'getPrestashop_Core_Localization_Locale_ContextLocaleService',
            'prestashop.core.localization.locale.repository' => 'getPrestashop_Core_Localization_Locale_RepositoryService',
            'prestashop.core.string.character_cleaner' => 'getPrestashop_Core_String_CharacterCleanerService',
            'prestashop.database.naming_strategy' => 'getPrestashop_Database_NamingStrategyService',
            'prestashop.translation.translator_language_loader' => 'getPrestashop_Translation_TranslatorLanguageLoaderService',
            'product_comment_criterion_repository' => 'getProductCommentCriterionRepositoryService',
            'product_comment_repository' => 'getProductCommentRepositoryService',
            'ps_checkout.db' => 'getPsCheckout_DbService',
            'ps_checkout.module' => 'getPsCheckout_ModuleService',
            'ps_facebook' => 'getPsFacebookService',
            'ps_facebook.billing_env' => 'getPsFacebook_BillingEnvService',
            'ps_facebook.cache' => 'getPsFacebook_CacheService',
            'ps_facebook.context' => 'getPsFacebook_ContextService',
            'ps_facebook.controller' => 'getPsFacebook_ControllerService',
            'ps_facebook.cookie' => 'getPsFacebook_CookieService',
            'ps_facebook.currency' => 'getPsFacebook_CurrencyService',
            'ps_facebook.language' => 'getPsFacebook_LanguageService',
            'ps_facebook.link' => 'getPsFacebook_LinkService',
            'ps_facebook.shop' => 'getPsFacebook_ShopService',
            'ps_facebook.smarty' => 'getPsFacebook_SmartyService',
            'psxmarketingwithgoogle' => 'getPsxmarketingwithgoogleService',
            'psxmarketingwithgoogle.billing_env' => 'getPsxmarketingwithgoogle_BillingEnvService',
            'psxmarketingwithgoogle.cart' => 'getPsxmarketingwithgoogle_CartService',
            'psxmarketingwithgoogle.context' => 'getPsxmarketingwithgoogle_ContextService',
            'psxmarketingwithgoogle.controller' => 'getPsxmarketingwithgoogle_ControllerService',
            'psxmarketingwithgoogle.cookie' => 'getPsxmarketingwithgoogle_CookieService',
            'psxmarketingwithgoogle.country' => 'getPsxmarketingwithgoogle_CountryService',
            'psxmarketingwithgoogle.currency' => 'getPsxmarketingwithgoogle_CurrencyService',
            'psxmarketingwithgoogle.customer' => 'getPsxmarketingwithgoogle_CustomerService',
            'psxmarketingwithgoogle.db' => 'getPsxmarketingwithgoogle_DbService',
            'psxmarketingwithgoogle.language' => 'getPsxmarketingwithgoogle_LanguageService',
            'psxmarketingwithgoogle.link' => 'getPsxmarketingwithgoogle_LinkService',
            'psxmarketingwithgoogle.shop' => 'getPsxmarketingwithgoogle_ShopService',
            'psxmarketingwithgoogle.smarty' => 'getPsxmarketingwithgoogle_SmartyService',
        ];
        $this->privates = [
            'PrestaShopBundle\\DependencyInjection\\RuntimeConstEnvVarProcessor' => true,
            'PrestaShopCorp\\Billing\\Wrappers\\BillingContextWrapper' => true,
            'annotation_reader' => true,
            'cache.doctrine.orm.default.metadata' => true,
            'cache.doctrine.orm.default.query' => true,
            'cache.doctrine.orm.default.result' => true,
            'configuration' => true,
            'context' => true,
            'db' => true,
            'doctrine.cache_clear_metadata_command' => true,
            'doctrine.cache_clear_query_cache_command' => true,
            'doctrine.cache_clear_result_command' => true,
            'doctrine.cache_collection_region_command' => true,
            'doctrine.clear_entity_region_command' => true,
            'doctrine.clear_query_region_command' => true,
            'doctrine.database_create_command' => true,
            'doctrine.database_drop_command' => true,
            'doctrine.database_import_command' => true,
            'doctrine.dbal.connection_factory' => true,
            'doctrine.ensure_production_settings_command' => true,
            'doctrine.generate_entities_command' => true,
            'doctrine.mapping_convert_command' => true,
            'doctrine.mapping_import_command' => true,
            'doctrine.mapping_info_command' => true,
            'doctrine.orm.cache.provider.cache.doctrine.orm.default.metadata' => true,
            'doctrine.orm.cache.provider.cache.doctrine.orm.default.query' => true,
            'doctrine.orm.cache.provider.cache.doctrine.orm.default.result' => true,
            'doctrine.orm.default_entity_listener_resolver' => true,
            'doctrine.orm.default_entity_manager.property_info_extractor' => true,
            'doctrine.orm.default_listeners.attach_entity_listeners' => true,
            'doctrine.orm.default_manager_configurator' => true,
            'doctrine.orm.validator.unique' => true,
            'doctrine.orm.validator_initializer' => true,
            'doctrine.query_dql_command' => true,
            'doctrine.query_sql_command' => true,
            'doctrine.schema_create_command' => true,
            'doctrine.schema_drop_command' => true,
            'doctrine.schema_update_command' => true,
            'doctrine.schema_validate_command' => true,
            'doctrine_cache.contains_command' => true,
            'doctrine_cache.delete_command' => true,
            'doctrine_cache.flush_command' => true,
            'doctrine_cache.stats_command' => true,
            'employee' => true,
            'form.type.entity' => true,
            'form.type_guesser.doctrine' => true,
            'hashing' => true,
            'prestashop.adapter.module.repository.module_repository' => true,
            'prestashop.core.filter.front_end_object.cart' => true,
            'prestashop.core.filter.front_end_object.configuration' => true,
            'prestashop.core.filter.front_end_object.customer' => true,
            'prestashop.core.filter.front_end_object.main' => true,
            'prestashop.core.filter.front_end_object.product' => true,
            'prestashop.core.filter.front_end_object.product_collection' => true,
            'prestashop.core.filter.front_end_object.search_result_product' => true,
            'prestashop.core.filter.front_end_object.search_result_product_collection' => true,
            'prestashop.core.filter.front_end_object.shop' => true,
            'prestashop.database.naming_strategy' => true,
            'prestashop.translation.translator_language_loader' => true,
            'shop' => true,
        ];
        $this->aliases = [
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\GoogleCategoryProviderInterface' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\GoogleCategoryProvider',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductAvailabilityProviderInterface' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductAvailabilityProvider',
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'prestashop.core.localization.cldr.datalayer.top_layer' => 'prestashop.core.localization.cldr.datalayer.locale_cache',
            'prestashop.core.localization.currency.middleware.top_layer' => 'prestashop.core.localization.currency.middleware.cache',
        ];
    }

    public function getRemovedIds()
    {
        return [
            'Doctrine\\Bundle\\DoctrineBundle\\Registry' => true,
            'Doctrine\\Common\\Persistence\\ManagerRegistry' => true,
            'Doctrine\\Common\\Persistence\\ObjectManager' => true,
            'Doctrine\\DBAL\\Connection' => true,
            'Doctrine\\DBAL\\Driver\\Connection' => true,
            'Doctrine\\ORM\\EntityManagerInterface' => true,
            'Doctrine\\Persistence\\ManagerRegistry' => true,
            'PrestaShopBundle\\DependencyInjection\\RuntimeConstEnvVarProcessor' => true,
            'PrestaShopCorp\\Billing\\Wrappers\\BillingContextWrapper' => true,
            'Psr\\Container\\ContainerInterface' => true,
            'Symfony\\Bridge\\Doctrine\\RegistryInterface' => true,
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => true,
            'annotation_reader' => true,
            'cache.doctrine.orm.default.metadata' => true,
            'cache.doctrine.orm.default.query' => true,
            'cache.doctrine.orm.default.result' => true,
            'configuration' => true,
            'context' => true,
            'data_collector.doctrine' => true,
            'db' => true,
            'doctrine.cache_clear_metadata_command' => true,
            'doctrine.cache_clear_query_cache_command' => true,
            'doctrine.cache_clear_result_command' => true,
            'doctrine.cache_collection_region_command' => true,
            'doctrine.clear_entity_region_command' => true,
            'doctrine.clear_query_region_command' => true,
            'doctrine.database_create_command' => true,
            'doctrine.database_drop_command' => true,
            'doctrine.database_import_command' => true,
            'doctrine.dbal.connection' => true,
            'doctrine.dbal.connection.configuration' => true,
            'doctrine.dbal.connection.event_manager' => true,
            'doctrine.dbal.connection_factory' => true,
            'doctrine.dbal.default_connection.configuration' => true,
            'doctrine.dbal.default_connection.event_manager' => true,
            'doctrine.dbal.event_manager' => true,
            'doctrine.dbal.logger' => true,
            'doctrine.dbal.logger.backtrace' => true,
            'doctrine.dbal.logger.chain' => true,
            'doctrine.dbal.logger.chain.default' => true,
            'doctrine.dbal.logger.profiling' => true,
            'doctrine.dbal.logger.profiling.default' => true,
            'doctrine.dbal.schema_asset_filter_manager' => true,
            'doctrine.dbal.well_known_schema_asset_filter' => true,
            'doctrine.ensure_production_settings_command' => true,
            'doctrine.generate_entities_command' => true,
            'doctrine.mapping_convert_command' => true,
            'doctrine.mapping_import_command' => true,
            'doctrine.mapping_info_command' => true,
            'doctrine.orm.cache.provider.cache.doctrine.orm.default.metadata' => true,
            'doctrine.orm.cache.provider.cache.doctrine.orm.default.query' => true,
            'doctrine.orm.cache.provider.cache.doctrine.orm.default.result' => true,
            'doctrine.orm.configuration' => true,
            'doctrine.orm.container_repository_factory' => true,
            'doctrine.orm.default_annotation_metadata_driver' => true,
            'doctrine.orm.default_configuration' => true,
            'doctrine.orm.default_entity_listener_resolver' => true,
            'doctrine.orm.default_entity_manager.event_manager' => true,
            'doctrine.orm.default_entity_manager.metadata_factory' => true,
            'doctrine.orm.default_entity_manager.property_info_extractor' => true,
            'doctrine.orm.default_listeners.attach_entity_listeners' => true,
            'doctrine.orm.default_manager_configurator' => true,
            'doctrine.orm.default_metadata_cache' => true,
            'doctrine.orm.default_metadata_driver' => true,
            'doctrine.orm.default_query_cache' => true,
            'doctrine.orm.default_result_cache' => true,
            'doctrine.orm.entity_manager.abstract' => true,
            'doctrine.orm.listeners.resolve_target_entity' => true,
            'doctrine.orm.manager_configurator.abstract' => true,
            'doctrine.orm.metadata.annotation_reader' => true,
            'doctrine.orm.naming_strategy.default' => true,
            'doctrine.orm.naming_strategy.underscore' => true,
            'doctrine.orm.naming_strategy.underscore_number_aware' => true,
            'doctrine.orm.proxy_cache_warmer' => true,
            'doctrine.orm.quote_strategy.ansi' => true,
            'doctrine.orm.quote_strategy.default' => true,
            'doctrine.orm.security.user.provider' => true,
            'doctrine.orm.validator.unique' => true,
            'doctrine.orm.validator_initializer' => true,
            'doctrine.query_dql_command' => true,
            'doctrine.query_sql_command' => true,
            'doctrine.schema_create_command' => true,
            'doctrine.schema_drop_command' => true,
            'doctrine.schema_update_command' => true,
            'doctrine.schema_validate_command' => true,
            'doctrine.twig.doctrine_extension' => true,
            'doctrine_cache.abstract.apc' => true,
            'doctrine_cache.abstract.apcu' => true,
            'doctrine_cache.abstract.array' => true,
            'doctrine_cache.abstract.chain' => true,
            'doctrine_cache.abstract.couchbase' => true,
            'doctrine_cache.abstract.file_system' => true,
            'doctrine_cache.abstract.memcache' => true,
            'doctrine_cache.abstract.memcached' => true,
            'doctrine_cache.abstract.mongodb' => true,
            'doctrine_cache.abstract.php_file' => true,
            'doctrine_cache.abstract.predis' => true,
            'doctrine_cache.abstract.redis' => true,
            'doctrine_cache.abstract.riak' => true,
            'doctrine_cache.abstract.sqlite3' => true,
            'doctrine_cache.abstract.void' => true,
            'doctrine_cache.abstract.wincache' => true,
            'doctrine_cache.abstract.xcache' => true,
            'doctrine_cache.abstract.zenddata' => true,
            'doctrine_cache.contains_command' => true,
            'doctrine_cache.delete_command' => true,
            'doctrine_cache.flush_command' => true,
            'doctrine_cache.stats_command' => true,
            'employee' => true,
            'form.type.entity' => true,
            'form.type_guesser.doctrine' => true,
            'hashing' => true,
            'prestashop.adapter.module.repository.module_repository' => true,
            'prestashop.core.filter.front_end_object.cart' => true,
            'prestashop.core.filter.front_end_object.configuration' => true,
            'prestashop.core.filter.front_end_object.customer' => true,
            'prestashop.core.filter.front_end_object.main' => true,
            'prestashop.core.filter.front_end_object.product' => true,
            'prestashop.core.filter.front_end_object.product_collection' => true,
            'prestashop.core.filter.front_end_object.search_result_product' => true,
            'prestashop.core.filter.front_end_object.search_result_product_collection' => true,
            'prestashop.core.filter.front_end_object.shop' => true,
            'prestashop.database.naming_strategy' => true,
            'prestashop.translation.translator_language_loader' => true,
            'shop' => true,
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
     * Gets the public 'PrestaShopCorp\Billing\Presenter\BillingPresenter' shared service.
     *
     * @return \PrestaShopCorp\Billing\Presenter\BillingPresenter
     */
    protected function getBillingPresenterService()
    {
        return $this->services['PrestaShopCorp\\Billing\\Presenter\\BillingPresenter'] = new \PrestaShopCorp\Billing\Presenter\BillingPresenter(${($_ = isset($this->services['PrestaShopCorp\\Billing\\Wrappers\\BillingContextWrapper']) ? $this->services['PrestaShopCorp\\Billing\\Wrappers\\BillingContextWrapper'] : $this->getBillingContextWrapperService()) && false ?: '_'}, ${($_ = isset($this->services['ps_facebook']) ? $this->services['ps_facebook'] : $this->getPsFacebookService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShopCorp\Billing\Services\BillingService' shared service.
     *
     * @return \PrestaShopCorp\Billing\Services\BillingService
     */
    protected function getBillingServiceService()
    {
        return $this->services['PrestaShopCorp\\Billing\\Services\\BillingService'] = new \PrestaShopCorp\Billing\Services\BillingService(${($_ = isset($this->services['PrestaShopCorp\\Billing\\Wrappers\\BillingContextWrapper']) ? $this->services['PrestaShopCorp\\Billing\\Wrappers\\BillingContextWrapper'] : $this->getBillingContextWrapperService()) && false ?: '_'}, ${($_ = isset($this->services['ps_facebook']) ? $this->services['ps_facebook'] : $this->getPsFacebookService()) && false ?: '_'});
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
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\API\Client\FacebookCategoryClient' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\API\Client\FacebookCategoryClient
     */
    protected function getFacebookCategoryClientService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookCategoryClient'] = new \PrestaShop\Module\PrestashopFacebook\API\Client\FacebookCategoryClient(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Factory\\PsApiClientFactory']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Factory\\PsApiClientFactory'] : $this->getPsApiClientFactoryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\GoogleCategoryRepository']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\GoogleCategoryRepository'] : $this->getGoogleCategoryRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\API\Client\FacebookClient' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\API\Client\FacebookClient
     */
    protected function getFacebookClientService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookClient'] = new \PrestaShop\Module\PrestashopFacebook\API\Client\FacebookClient(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Factory\\FacebookEssentialsApiClientFactory']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Factory\\FacebookEssentialsApiClientFactory'] : ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Factory\\FacebookEssentialsApiClientFactory'] = new \PrestaShop\Module\PrestashopFacebook\Factory\FacebookEssentialsApiClientFactory())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\AccessTokenProvider']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\AccessTokenProvider'] : $this->getAccessTokenProviderService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ConfigurationHandler']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ConfigurationHandler'] : $this->getConfigurationHandlerService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\API\EventSubscriber\AccountSuspendedSubscriber' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\API\EventSubscriber\AccountSuspendedSubscriber
     */
    protected function getAccountSuspendedSubscriberService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\EventSubscriber\\AccountSuspendedSubscriber'] = new \PrestaShop\Module\PrestashopFacebook\API\EventSubscriber\AccountSuspendedSubscriber(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\API\EventSubscriber\ApiErrorSubscriber' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\API\EventSubscriber\ApiErrorSubscriber
     */
    protected function getApiErrorSubscriberService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\EventSubscriber\\ApiErrorSubscriber'] = new \PrestaShop\Module\PrestashopFacebook\API\EventSubscriber\ApiErrorSubscriber();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Adapter\ConfigurationAdapter' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Adapter\ConfigurationAdapter
     */
    protected function getConfigurationAdapterService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] = new \PrestaShop\Module\PrestashopFacebook\Adapter\ConfigurationAdapter(${($_ = isset($this->services['ps_facebook.shop']) ? $this->services['ps_facebook.shop'] : $this->getPsFacebook_ShopService()) && false ?: '_'}->id);
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Adapter\ToolsAdapter' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Adapter\ToolsAdapter
     */
    protected function getToolsAdapterService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ToolsAdapter'] = new \PrestaShop\Module\PrestashopFacebook\Adapter\ToolsAdapter();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Buffer\TemplateBuffer' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Buffer\TemplateBuffer
     */
    protected function getTemplateBufferService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Buffer\\TemplateBuffer'] = new \PrestaShop\Module\PrestashopFacebook\Buffer\TemplateBuffer();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Config\Env' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Config\Env
     */
    protected function getEnvService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env'] = new \PrestaShop\Module\PrestashopFacebook\Config\Env();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Dispatcher\EventDispatcher' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Dispatcher\EventDispatcher
     */
    protected function getEventDispatcherService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Dispatcher\\EventDispatcher'] = new \PrestaShop\Module\PrestashopFacebook\Dispatcher\EventDispatcher(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ApiConversionHandler']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ApiConversionHandler'] : $this->getApiConversionHandlerService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\PixelHandler']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\PixelHandler'] : $this->getPixelHandlerService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\EventDataProvider']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\EventDataProvider'] : $this->getEventDataProviderService()) && false ?: '_'}, ${($_ = isset($this->services['ps_facebook.context']) ? $this->services['ps_facebook.context'] : $this->getPsFacebook_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Factory\FacebookEssentialsApiClientFactory' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Factory\FacebookEssentialsApiClientFactory
     */
    protected function getFacebookEssentialsApiClientFactoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Factory\\FacebookEssentialsApiClientFactory'] = new \PrestaShop\Module\PrestashopFacebook\Factory\FacebookEssentialsApiClientFactory();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Factory\PsApiClientFactory' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Factory\PsApiClientFactory
     */
    protected function getPsApiClientFactoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Factory\\PsApiClientFactory'] = new \PrestaShop\Module\PrestashopFacebook\Factory\PsApiClientFactory(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env'] : ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env'] = new \PrestaShop\Module\PrestashopFacebook\Config\Env())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts']) ? $this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts'] : $this->getPsAccountsService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Handler\ApiConversionHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Handler\ApiConversionHandler
     */
    protected function getApiConversionHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ApiConversionHandler'] = new \PrestaShop\Module\PrestashopFacebook\Handler\ApiConversionHandler(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ErrorHandler\\ErrorHandler']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ErrorHandler\\ErrorHandler'] : ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ErrorHandler\\ErrorHandler'] = new \PrestaShop\Module\PrestashopFacebook\Handler\ErrorHandler\ErrorHandler())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookClient']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookClient'] : $this->getFacebookClientService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Handler\CategoryMatchHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Handler\CategoryMatchHandler
     */
    protected function getCategoryMatchHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\CategoryMatchHandler'] = new \PrestaShop\Module\PrestashopFacebook\Handler\CategoryMatchHandler(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\GoogleCategoryRepository']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\GoogleCategoryRepository'] : $this->getGoogleCategoryRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Handler\ConfigurationHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Handler\ConfigurationHandler
     */
    protected function getConfigurationHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ConfigurationHandler'] = new \PrestaShop\Module\PrestashopFacebook\Handler\ConfigurationHandler(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Handler\ErrorHandler\ErrorHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Handler\ErrorHandler\ErrorHandler
     */
    protected function getErrorHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ErrorHandler\\ErrorHandler'] = new \PrestaShop\Module\PrestashopFacebook\Handler\ErrorHandler\ErrorHandler();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Handler\EventBusProductHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Handler\EventBusProductHandler
     */
    protected function getEventBusProductHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\EventBusProductHandler'] = new \PrestaShop\Module\PrestashopFacebook\Handler\EventBusProductHandler(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ProductRepository']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ProductRepository'] : ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ProductRepository'] = new \PrestaShop\Module\PrestashopFacebook\Repository\ProductRepository())) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Handler\MessengerHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Handler\MessengerHandler
     */
    protected function getMessengerHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\MessengerHandler'] = new \PrestaShop\Module\PrestashopFacebook\Handler\MessengerHandler(${($_ = isset($this->services['ps_facebook.language']) ? $this->services['ps_facebook.language'] : $this->getPsFacebook_LanguageService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env'] : ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env'] = new \PrestaShop\Module\PrestashopFacebook\Config\Env())) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Handler\PixelHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Handler\PixelHandler
     */
    protected function getPixelHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\PixelHandler'] = new \PrestaShop\Module\PrestashopFacebook\Handler\PixelHandler(${($_ = isset($this->services['ps_facebook']) ? $this->services['ps_facebook'] : $this->getPsFacebookService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Handler\PrevalidationScanRefreshHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Handler\PrevalidationScanRefreshHandler
     */
    protected function getPrevalidationScanRefreshHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\PrevalidationScanRefreshHandler'] = new \PrestaShop\Module\PrestashopFacebook\Handler\PrevalidationScanRefreshHandler(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\PrevalidationScanCacheProvider']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\PrevalidationScanCacheProvider'] : $this->getPrevalidationScanCacheProviderService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ProductRepository']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ProductRepository'] : ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ProductRepository'] = new \PrestaShop\Module\PrestashopFacebook\Repository\ProductRepository())) && false ?: '_'}, ${($_ = isset($this->services['ps_facebook.shop']) ? $this->services['ps_facebook.shop'] : $this->getPsFacebook_ShopService()) && false ?: '_'}->id);
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Manager\FbeFeatureManager' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Manager\FbeFeatureManager
     */
    protected function getFbeFeatureManagerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Manager\\FbeFeatureManager'] = new \PrestaShop\Module\PrestashopFacebook\Manager\FbeFeatureManager(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookClient']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookClient'] : $this->getFacebookClientService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Presenter\ModuleUpgradePresenter' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Presenter\ModuleUpgradePresenter
     */
    protected function getModuleUpgradePresenterService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Presenter\\ModuleUpgradePresenter'] = new \PrestaShop\Module\PrestashopFacebook\Presenter\ModuleUpgradePresenter(${($_ = isset($this->services['ps_facebook.context']) ? $this->services['ps_facebook.context'] : $this->getPsFacebook_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Provider\AccessTokenProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\AccessTokenProvider
     */
    protected function getAccessTokenProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\AccessTokenProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\AccessTokenProvider(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'}, ${($_ = isset($this->services['ps_facebook.controller']) ? $this->services['ps_facebook.controller'] : $this->getPsFacebook_ControllerService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Factory\\PsApiClientFactory']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Factory\\PsApiClientFactory'] : $this->getPsApiClientFactoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Provider\EventDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\EventDataProvider
     */
    protected function getEventDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\EventDataProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\EventDataProvider(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ToolsAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ToolsAdapter'] : ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ToolsAdapter'] = new \PrestaShop\Module\PrestashopFacebook\Adapter\ToolsAdapter())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ProductRepository']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ProductRepository'] : ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ProductRepository'] = new \PrestaShop\Module\PrestashopFacebook\Repository\ProductRepository())) && false ?: '_'}, ${($_ = isset($this->services['ps_facebook.context']) ? $this->services['ps_facebook.context'] : $this->getPsFacebook_ContextService()) && false ?: '_'}, ${($_ = isset($this->services['ps_facebook']) ? $this->services['ps_facebook'] : $this->getPsFacebookService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductAvailabilityProvider']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductAvailabilityProvider'] : ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductAvailabilityProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\ProductAvailabilityProvider())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\GoogleCategoryRepository']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\GoogleCategoryRepository'] : $this->getGoogleCategoryRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\GoogleCategoryProvider']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\GoogleCategoryProvider'] : $this->getGoogleCategoryProviderService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Provider\FacebookDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\FacebookDataProvider
     */
    protected function getFacebookDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\FacebookDataProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\FacebookDataProvider(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookClient']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookClient'] : $this->getFacebookClientService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Provider\FbeDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\FbeDataProvider
     */
    protected function getFbeDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\FbeDataProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\FbeDataProvider(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Provider\FbeFeatureDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\FbeFeatureDataProvider
     */
    protected function getFbeFeatureDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\FbeFeatureDataProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\FbeFeatureDataProvider(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookClient']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookClient'] : $this->getFacebookClientService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Provider\GoogleCategoryProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\GoogleCategoryProvider
     */
    protected function getGoogleCategoryProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\GoogleCategoryProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\GoogleCategoryProvider(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\GoogleCategoryRepository']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\GoogleCategoryRepository'] : $this->getGoogleCategoryRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Provider\MultishopDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\MultishopDataProvider
     */
    protected function getMultishopDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\MultishopDataProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\MultishopDataProvider(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ShopRepository']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ShopRepository'] : ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ShopRepository'] = new \PrestaShop\Module\PrestashopFacebook\Repository\ShopRepository())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\Ps_facebook\\Tracker\\Segment']) ? $this->services['PrestaShop\\Module\\Ps_facebook\\Tracker\\Segment'] : $this->getSegmentService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Provider\PrevalidationScanCacheProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\PrevalidationScanCacheProvider
     */
    protected function getPrevalidationScanCacheProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\PrevalidationScanCacheProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\PrevalidationScanCacheProvider(${($_ = isset($this->services['ps_facebook']) ? $this->services['ps_facebook'] : $this->getPsFacebookService()) && false ?: '_'}, ${($_ = isset($this->services['ps_facebook.cache']) ? $this->services['ps_facebook.cache'] : $this->getPsFacebook_CacheService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Provider\PrevalidationScanDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\PrevalidationScanDataProvider
     */
    protected function getPrevalidationScanDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\PrevalidationScanDataProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\PrevalidationScanDataProvider(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\PrevalidationScanCacheProvider']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\PrevalidationScanCacheProvider'] : $this->getPrevalidationScanCacheProviderService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Provider\ProductAvailabilityProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\ProductAvailabilityProvider
     */
    protected function getProductAvailabilityProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductAvailabilityProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\ProductAvailabilityProvider();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Provider\ProductSyncReportProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\ProductSyncReportProvider
     */
    protected function getProductSyncReportProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductSyncReportProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\ProductSyncReportProvider(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Factory\\PsApiClientFactory']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Factory\\PsApiClientFactory'] : $this->getPsApiClientFactoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Repository\GoogleCategoryRepository' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Repository\GoogleCategoryRepository
     */
    protected function getGoogleCategoryRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\GoogleCategoryRepository'] = new \PrestaShop\Module\PrestashopFacebook\Repository\GoogleCategoryRepository(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Repository\ProductRepository' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Repository\ProductRepository
     */
    protected function getProductRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ProductRepository'] = new \PrestaShop\Module\PrestashopFacebook\Repository\ProductRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Repository\ServerInformationRepository' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Repository\ServerInformationRepository
     */
    protected function getServerInformationRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ServerInformationRepository'] = new \PrestaShop\Module\PrestashopFacebook\Repository\ServerInformationRepository(${($_ = isset($this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts']) ? $this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts'] : $this->getPsAccountsService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Repository\ShopRepository' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Repository\ShopRepository
     */
    protected function getShopRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ShopRepository'] = new \PrestaShop\Module\PrestashopFacebook\Repository\ShopRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Repository\TabRepository' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Repository\TabRepository
     */
    protected function getTabRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\TabRepository'] = new \PrestaShop\Module\PrestashopFacebook\Repository\TabRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\Ps_facebook\Tracker\Segment' shared service.
     *
     * @return \PrestaShop\Module\Ps_facebook\Tracker\Segment
     */
    protected function getSegmentService()
    {
        return $this->services['PrestaShop\\Module\\Ps_facebook\\Tracker\\Segment'] = new \PrestaShop\Module\Ps_facebook\Tracker\Segment(${($_ = isset($this->services['ps_facebook.context']) ? $this->services['ps_facebook.context'] : $this->getPsFacebook_ContextService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env'] : ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env'] = new \PrestaShop\Module\PrestashopFacebook\Config\Env())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts']) ? $this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts'] : $this->getPsAccountsService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Adapter\ConfigurationAdapter' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Adapter\ConfigurationAdapter
     */
    protected function getConfigurationAdapter2Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Adapter\ConfigurationAdapter(${($_ = isset($this->services['psxmarketingwithgoogle.shop']) ? $this->services['psxmarketingwithgoogle.shop'] : $this->getPsxmarketingwithgoogle_ShopService()) && false ?: '_'}->id);
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Buffer\TemplateBuffer' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Buffer\TemplateBuffer
     */
    protected function getTemplateBuffer2Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Buffer\\TemplateBuffer'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Buffer\TemplateBuffer();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Config\Env' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Config\Env
     */
    protected function getEnv2Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Config\\Env'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Config\Env();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Conversion\EnhancedConversionToggle' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Conversion\EnhancedConversionToggle
     */
    protected function getEnhancedConversionToggleService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Conversion\\EnhancedConversionToggle'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Conversion\EnhancedConversionToggle(${($_ = isset($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapter2Service()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Conversion\UserDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Conversion\UserDataProvider
     */
    protected function getUserDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Conversion\\UserDataProvider'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Conversion\UserDataProvider(${($_ = isset($this->services['psxmarketingwithgoogle.customer']) ? $this->services['psxmarketingwithgoogle.customer'] : $this->getPsxmarketingwithgoogle_CustomerService()) && false ?: '_'}, ${($_ = isset($this->services['psxmarketingwithgoogle.cart']) ? $this->services['psxmarketingwithgoogle.cart'] : $this->getPsxmarketingwithgoogle_CartService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Handler\ErrorHandler' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Handler\ErrorHandler
     */
    protected function getErrorHandler2Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Handler\\ErrorHandler'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Handler\ErrorHandler();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Handler\RemarketingHookHandler' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Handler\RemarketingHookHandler
     */
    protected function getRemarketingHookHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Handler\\RemarketingHookHandler'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Handler\RemarketingHookHandler(${($_ = isset($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapter2Service()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Buffer\\TemplateBuffer']) ? $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Buffer\\TemplateBuffer'] : ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Buffer\\TemplateBuffer'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Buffer\TemplateBuffer())) && false ?: '_'}, ${($_ = isset($this->services['psxmarketingwithgoogle.context']) ? $this->services['psxmarketingwithgoogle.context'] : $this->getPsxmarketingwithgoogle_ContextService()) && false ?: '_'}, ${($_ = isset($this->services['psxmarketingwithgoogle']) ? $this->services['psxmarketingwithgoogle'] : $this->getPsxmarketingwithgoogleService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Provider\CartEventDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Provider\CartEventDataProvider
     */
    protected function getCartEventDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\CartEventDataProvider'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Provider\CartEventDataProvider(${($_ = isset($this->services['psxmarketingwithgoogle.context']) ? $this->services['psxmarketingwithgoogle.context'] : $this->getPsxmarketingwithgoogle_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Provider\PageViewEventDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Provider\PageViewEventDataProvider
     */
    protected function getPageViewEventDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\PageViewEventDataProvider'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Provider\PageViewEventDataProvider(${($_ = isset($this->services['psxmarketingwithgoogle.context']) ? $this->services['psxmarketingwithgoogle.context'] : $this->getPsxmarketingwithgoogle_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Provider\ProductDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Provider\ProductDataProvider
     */
    protected function getProductDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\ProductDataProvider'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Provider\ProductDataProvider(${($_ = isset($this->services['psxmarketingwithgoogle.context']) ? $this->services['psxmarketingwithgoogle.context'] : $this->getPsxmarketingwithgoogle_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Provider\PurchaseEventDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Provider\PurchaseEventDataProvider
     */
    protected function getPurchaseEventDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\PurchaseEventDataProvider'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Provider\PurchaseEventDataProvider(${($_ = isset($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\ProductDataProvider']) ? $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\ProductDataProvider'] : $this->getProductDataProviderService()) && false ?: '_'}, ${($_ = isset($this->services['psxmarketingwithgoogle.context']) ? $this->services['psxmarketingwithgoogle.context'] : $this->getPsxmarketingwithgoogle_ContextService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapter2Service()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\LanguageRepository']) ? $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\LanguageRepository'] : $this->getLanguageRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CountryRepository']) ? $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CountryRepository'] : $this->getCountryRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Provider\VerificationTagDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Provider\VerificationTagDataProvider
     */
    protected function getVerificationTagDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\VerificationTagDataProvider'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Provider\VerificationTagDataProvider(${($_ = isset($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapter2Service()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\VerificationTagRepository']) ? $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\VerificationTagRepository'] : $this->getVerificationTagRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\AttributesRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\AttributesRepository
     */
    protected function getAttributesRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\AttributesRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\AttributesRepository(${($_ = isset($this->services['psxmarketingwithgoogle.context']) ? $this->services['psxmarketingwithgoogle.context'] : $this->getPsxmarketingwithgoogle_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\CarrierRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\CarrierRepository
     */
    protected function getCarrierRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CarrierRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\CarrierRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\CategoryRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\CategoryRepository
     */
    protected function getCategoryRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CategoryRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\CategoryRepository(${($_ = isset($this->services['psxmarketingwithgoogle.context']) ? $this->services['psxmarketingwithgoogle.context'] : $this->getPsxmarketingwithgoogle_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\CountryRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\CountryRepository
     */
    protected function getCountryRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CountryRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\CountryRepository(${($_ = isset($this->services['psxmarketingwithgoogle.db']) ? $this->services['psxmarketingwithgoogle.db'] : $this->getPsxmarketingwithgoogle_DbService()) && false ?: '_'}, ${($_ = isset($this->services['psxmarketingwithgoogle.context']) ? $this->services['psxmarketingwithgoogle.context'] : $this->getPsxmarketingwithgoogle_ContextService()) && false ?: '_'}, ${($_ = isset($this->services['psxmarketingwithgoogle.country']) ? $this->services['psxmarketingwithgoogle.country'] : $this->getPsxmarketingwithgoogle_CountryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapter2Service()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\CurrencyRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\CurrencyRepository
     */
    protected function getCurrencyRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CurrencyRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\CurrencyRepository(${($_ = isset($this->services['psxmarketingwithgoogle.currency']) ? $this->services['psxmarketingwithgoogle.currency'] : $this->getPsxmarketingwithgoogle_CurrencyService()) && false ?: '_'}, ${($_ = isset($this->services['psxmarketingwithgoogle.context']) ? $this->services['psxmarketingwithgoogle.context'] : $this->getPsxmarketingwithgoogle_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\LanguageRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\LanguageRepository
     */
    protected function getLanguageRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\LanguageRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\LanguageRepository(${($_ = isset($this->services['psxmarketingwithgoogle.shop']) ? $this->services['psxmarketingwithgoogle.shop'] : $this->getPsxmarketingwithgoogle_ShopService()) && false ?: '_'}->id);
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\ManufacturerRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\ManufacturerRepository
     */
    protected function getManufacturerRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\ManufacturerRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\ManufacturerRepository(${($_ = isset($this->services['psxmarketingwithgoogle.context']) ? $this->services['psxmarketingwithgoogle.context'] : $this->getPsxmarketingwithgoogle_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\ProductRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\ProductRepository
     */
    protected function getProductRepository2Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\ProductRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\ProductRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\StateRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\StateRepository
     */
    protected function getStateRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\StateRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\StateRepository(${($_ = isset($this->services['psxmarketingwithgoogle.db']) ? $this->services['psxmarketingwithgoogle.db'] : $this->getPsxmarketingwithgoogle_DbService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\TabRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\TabRepository
     */
    protected function getTabRepository2Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\TabRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\TabRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\TaxRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\TaxRepository
     */
    protected function getTaxRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\TaxRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\TaxRepository(${($_ = isset($this->services['psxmarketingwithgoogle.db']) ? $this->services['psxmarketingwithgoogle.db'] : $this->getPsxmarketingwithgoogle_DbService()) && false ?: '_'}, ${($_ = isset($this->services['psxmarketingwithgoogle.context']) ? $this->services['psxmarketingwithgoogle.context'] : $this->getPsxmarketingwithgoogle_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\VerificationTagRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\VerificationTagRepository
     */
    protected function getVerificationTagRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\VerificationTagRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\VerificationTagRepository(${($_ = isset($this->services['psxmarketingwithgoogle.db']) ? $this->services['psxmarketingwithgoogle.db'] : $this->getPsxmarketingwithgoogle_DbService()) && false ?: '_'}, ${($_ = isset($this->services['psxmarketingwithgoogle.context']) ? $this->services['psxmarketingwithgoogle.context'] : $this->getPsxmarketingwithgoogle_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Tracker\Segment' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Tracker\Segment
     */
    protected function getSegment2Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Tracker\\Segment'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Tracker\Segment(${($_ = isset($this->services['psxmarketingwithgoogle.context']) ? $this->services['psxmarketingwithgoogle.context'] : $this->getPsxmarketingwithgoogle_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\PsAccountsInstaller\Installer\Facade\PsAccounts' shared service.
     *
     * @return \PrestaShop\PsAccountsInstaller\Installer\Facade\PsAccounts
     */
    protected function getPsAccountsService()
    {
        return $this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts'] = new \PrestaShop\PsAccountsInstaller\Installer\Facade\PsAccounts(${($_ = isset($this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Installer']) ? $this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Installer'] : ($this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Installer'] = new \PrestaShop\PsAccountsInstaller\Installer\Installer('3.0.0'))) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\PsAccountsInstaller\Installer\Installer' shared service.
     *
     * @return \PrestaShop\PsAccountsInstaller\Installer\Installer
     */
    protected function getInstallerService()
    {
        return $this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Installer'] = new \PrestaShop\PsAccountsInstaller\Installer\Installer('3.0.0');
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
        return $this->services['PsCheckout\\Api\\Http\\Configuration\\CheckoutClientConfigurationBuilder'] = new \PsCheckout\Api\Http\Configuration\CheckoutClientConfigurationBuilder(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->version, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Link']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Link'] : $this->getLinkService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Environment\\Env']) ? $this->services['PsCheckout\\Infrastructure\\Environment\\Env'] : $this->getEnv3Service()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PsAccountRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PsAccountRepository'] : $this->getPsAccountRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['Psr\\Log\\LoggerInterface']) ? $this->services['Psr\\Log\\LoggerInterface'] : $this->getLoggerInterfaceService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Api\Http\Configuration\OrderHttpClientConfigurationBuilder' shared service.
     *
     * @return \PsCheckout\Api\Http\Configuration\OrderHttpClientConfigurationBuilder
     */
    protected function getOrderHttpClientConfigurationBuilderService()
    {
        return $this->services['PsCheckout\\Api\\Http\\Configuration\\OrderHttpClientConfigurationBuilder'] = new \PsCheckout\Api\Http\Configuration\OrderHttpClientConfigurationBuilder(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Environment\\Env']) ? $this->services['PsCheckout\\Infrastructure\\Environment\\Env'] : $this->getEnv3Service()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PsAccountRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PsAccountRepository'] : $this->getPsAccountRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['Psr\\Log\\LoggerInterface']) ? $this->services['Psr\\Log\\LoggerInterface'] : $this->getLoggerInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Link']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Link'] : $this->getLinkService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->version);
    }

    /**
     * Gets the public 'PsCheckout\Api\Http\Configuration\OrderShipmentTrackingConfigurationBuilder' shared service.
     *
     * @return \PsCheckout\Api\Http\Configuration\OrderShipmentTrackingConfigurationBuilder
     */
    protected function getOrderShipmentTrackingConfigurationBuilderService()
    {
        return $this->services['PsCheckout\\Api\\Http\\Configuration\\OrderShipmentTrackingConfigurationBuilder'] = new \PsCheckout\Api\Http\Configuration\OrderShipmentTrackingConfigurationBuilder(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->version, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Link']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Link'] : $this->getLinkService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Environment\\Env']) ? $this->services['PsCheckout\\Infrastructure\\Environment\\Env'] : $this->getEnv3Service()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PsAccountRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PsAccountRepository'] : $this->getPsAccountRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['Psr\\Log\\LoggerInterface']) ? $this->services['Psr\\Log\\LoggerInterface'] : $this->getLoggerInterfaceService()) && false ?: '_'});
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
     * Gets the public 'PsCheckout\Core\Customer\Action\ExpressCheckoutAction' shared service.
     *
     * @return \PsCheckout\Core\Customer\Action\ExpressCheckoutAction
     */
    protected function getExpressCheckoutActionService()
    {
        return $this->services['PsCheckout\\Core\\Customer\\Action\\ExpressCheckoutAction'] = new \PsCheckout\Core\Customer\Action\ExpressCheckoutAction(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Context']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] = new \PsCheckout\Infrastructure\Adapter\Context())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Action\\CustomerAuthenticationAction']) ? $this->services['PsCheckout\\Infrastructure\\Action\\CustomerAuthenticationAction'] : $this->getCustomerAuthenticationActionService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Action\\CreateOrUpdateAddressAction']) ? $this->services['PsCheckout\\Infrastructure\\Action\\CreateOrUpdateAddressAction'] : $this->getCreateOrUpdateAddressActionService()) && false ?: '_'});
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
     * Gets the public 'PsCheckout\Core\OrderState\Action\SetCompletedOrderStateAction' shared service.
     *
     * @return \PsCheckout\Core\OrderState\Action\SetCompletedOrderStateAction
     */
    protected function getSetCompletedOrderStateActionService()
    {
        return $this->services['PsCheckout\\Core\\OrderState\\Action\\SetCompletedOrderStateAction'] = new \PsCheckout\Core\OrderState\Action\SetCompletedOrderStateAction(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository'] : $this->getPayPalOrderRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository'] : ($this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository'] = new \PsCheckout\Infrastructure\Repository\OrderRepository())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\Order\\Validator\\OrderAmountValidator']) ? $this->services['PsCheckout\\Core\\Order\\Validator\\OrderAmountValidator'] : ($this->services['PsCheckout\\Core\\Order\\Validator\\OrderAmountValidator'] = new \PsCheckout\Core\Order\Validator\OrderAmountValidator())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\OrderState\\Service\\OrderStateMapper']) ? $this->services['PsCheckout\\Core\\OrderState\\Service\\OrderStateMapper'] : $this->getOrderStateMapperService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\OrderState\\Action\\ChangeOrderStateAction']) ? $this->services['PsCheckout\\Core\\OrderState\\Action\\ChangeOrderStateAction'] : $this->getChangeOrderStateActionService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Provider\\PayPalOrderProvider']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Provider\\PayPalOrderProvider'] : $this->getPayPalOrderProviderService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\OrderState\Action\SetDeclinedOrderStateAction' shared service.
     *
     * @return \PsCheckout\Core\OrderState\Action\SetDeclinedOrderStateAction
     */
    protected function getSetDeclinedOrderStateActionService()
    {
        return $this->services['PsCheckout\\Core\\OrderState\\Action\\SetDeclinedOrderStateAction'] = new \PsCheckout\Core\OrderState\Action\SetDeclinedOrderStateAction(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository'] : $this->getPayPalOrderRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository'] : ($this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository'] = new \PsCheckout\Infrastructure\Repository\OrderRepository())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\OrderState\\Service\\OrderStateMapper']) ? $this->services['PsCheckout\\Core\\OrderState\\Service\\OrderStateMapper'] : $this->getOrderStateMapperService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\OrderState\\Action\\ChangeOrderStateAction']) ? $this->services['PsCheckout\\Core\\OrderState\\Action\\ChangeOrderStateAction'] : $this->getChangeOrderStateActionService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\OrderState\Action\SetPendingOrderStateAction' shared service.
     *
     * @return \PsCheckout\Core\OrderState\Action\SetPendingOrderStateAction
     */
    protected function getSetPendingOrderStateActionService()
    {
        return $this->services['PsCheckout\\Core\\OrderState\\Action\\SetPendingOrderStateAction'] = new \PsCheckout\Core\OrderState\Action\SetPendingOrderStateAction(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository'] : $this->getPayPalOrderRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository'] : ($this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository'] = new \PsCheckout\Infrastructure\Repository\OrderRepository())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\OrderState\\Service\\OrderStateMapper']) ? $this->services['PsCheckout\\Core\\OrderState\\Service\\OrderStateMapper'] : $this->getOrderStateMapperService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\OrderState\\Action\\ChangeOrderStateAction']) ? $this->services['PsCheckout\\Core\\OrderState\\Action\\ChangeOrderStateAction'] : $this->getChangeOrderStateActionService()) && false ?: '_'});
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
     * Gets the public 'PsCheckout\Core\OrderState\Action\SetReversedOrderStateAction' shared service.
     *
     * @return \PsCheckout\Core\OrderState\Action\SetReversedOrderStateAction
     */
    protected function getSetReversedOrderStateActionService()
    {
        return $this->services['PsCheckout\\Core\\OrderState\\Action\\SetReversedOrderStateAction'] = new \PsCheckout\Core\OrderState\Action\SetReversedOrderStateAction(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository'] : $this->getPayPalOrderRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository'] : ($this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository'] = new \PsCheckout\Infrastructure\Repository\OrderRepository())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\OrderState\\Service\\OrderStateMapper']) ? $this->services['PsCheckout\\Core\\OrderState\\Service\\OrderStateMapper'] : $this->getOrderStateMapperService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\OrderState\\Action\\ChangeOrderStateAction']) ? $this->services['PsCheckout\\Core\\OrderState\\Action\\ChangeOrderStateAction'] : $this->getChangeOrderStateActionService()) && false ?: '_'});
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
     * Gets the public 'PsCheckout\Core\Order\Action\CreateOrderAction' shared service.
     *
     * @return \PsCheckout\Core\Order\Action\CreateOrderAction
     */
    protected function getCreateOrderActionService()
    {
        return $this->services['PsCheckout\\Core\\Order\\Action\\CreateOrderAction'] = new \PsCheckout\Core\Order\Action\CreateOrderAction(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Context']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] = new \PsCheckout\Infrastructure\Adapter\Context())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\Order\\Action\\CreateValidateOrderDataAction']) ? $this->services['PsCheckout\\Core\\Order\\Action\\CreateValidateOrderDataAction'] : $this->getCreateValidateOrderDataActionService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\Order\\Action\\ValidateOrderAction']) ? $this->services['PsCheckout\\Core\\Order\\Action\\ValidateOrderAction'] : $this->getValidateOrderActionService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository'] : ($this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository'] = new \PsCheckout\Infrastructure\Repository\OrderRepository())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderMatrixRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderMatrixRepository'] : $this->getPayPalOrderMatrixRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\Order\Action\CreateOrderPaymentAction' shared service.
     *
     * @return \PsCheckout\Core\Order\Action\CreateOrderPaymentAction
     */
    protected function getCreateOrderPaymentActionService()
    {
        return $this->services['PsCheckout\\Core\\Order\\Action\\CreateOrderPaymentAction'] = new \PsCheckout\Core\Order\Action\CreateOrderPaymentAction(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository'] : ($this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository'] = new \PsCheckout\Infrastructure\Repository\OrderRepository())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository'] : $this->getPayPalOrderRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourceTranslationProvider']) ? $this->services['PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourceTranslationProvider'] : $this->getFundingSourceTranslationProviderService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Currency']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Currency'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Currency'] = new \PsCheckout\Infrastructure\Adapter\Currency())) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\Order\Action\CreateValidateOrderDataAction' shared service.
     *
     * @return \PsCheckout\Core\Order\Action\CreateValidateOrderDataAction
     */
    protected function getCreateValidateOrderDataActionService()
    {
        return $this->services['PsCheckout\\Core\\Order\\Action\\CreateValidateOrderDataAction'] = new \PsCheckout\Core\Order\Action\CreateValidateOrderDataAction(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Context']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] = new \PsCheckout\Infrastructure\Adapter\Context())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\OrderState\\Service\\OrderStateMapper']) ? $this->services['PsCheckout\\Core\\OrderState\\Service\\OrderStateMapper'] : $this->getOrderStateMapperService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\CurrencyRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\CurrencyRepository'] : $this->getCurrencyRepository2Service()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\Order\\Validator\\OrderAmountValidator']) ? $this->services['PsCheckout\\Core\\Order\\Validator\\OrderAmountValidator'] : ($this->services['PsCheckout\\Core\\Order\\Validator\\OrderAmountValidator'] = new \PsCheckout\Core\Order\Validator\OrderAmountValidator())) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\Order\Action\ValidateOrderAction' shared service.
     *
     * @return \PsCheckout\Core\Order\Action\ValidateOrderAction
     */
    protected function getValidateOrderActionService()
    {
        return $this->services['PsCheckout\\Core\\Order\\Action\\ValidateOrderAction'] = new \PsCheckout\Core\Order\Action\ValidateOrderAction(${($_ = isset($this->services['PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourceTranslationProvider']) ? $this->services['PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourceTranslationProvider'] : $this->getFundingSourceTranslationProviderService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'});
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
        return $this->services['PsCheckout\\Core\\Order\\Builder\\Node\\CardPaymentSourceNodeBuilder'] = new \PsCheckout\Core\Order\Builder\Node\CardPaymentSourceNodeBuilder(${($_ = isset($this->services['PsCheckout\\Core\\Settings\\Configuration\\PayPalConfiguration']) ? $this->services['PsCheckout\\Core\\Settings\\Configuration\\PayPalConfiguration'] : $this->getPayPalConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\CountryRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\CountryRepository'] : $this->getCountryRepository2Service()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\StateRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\StateRepository'] : ($this->services['PsCheckout\\Infrastructure\\Repository\\StateRepository'] = new \PsCheckout\Infrastructure\Repository\StateRepository())) && false ?: '_'});
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
        return $this->services['PsCheckout\\Core\\Order\\Builder\\Node\\PayerNodeBuilder'] = new \PsCheckout\Core\Order\Builder\Node\PayerNodeBuilder(${($_ = isset($this->services['Psr\\Log\\LoggerInterface']) ? $this->services['Psr\\Log\\LoggerInterface'] : $this->getLoggerInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Validate']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Validate'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Validate'] = new \PsCheckout\Infrastructure\Adapter\Validate())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\CountryRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\CountryRepository'] : $this->getCountryRepository2Service()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\StateRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\StateRepository'] : ($this->services['PsCheckout\\Infrastructure\\Repository\\StateRepository'] = new \PsCheckout\Infrastructure\Repository\StateRepository())) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\Order\Builder\Node\ShippingNodeBuilder' shared service.
     *
     * @return \PsCheckout\Core\Order\Builder\Node\ShippingNodeBuilder
     */
    protected function getShippingNodeBuilderService()
    {
        return $this->services['PsCheckout\\Core\\Order\\Builder\\Node\\ShippingNodeBuilder'] = new \PsCheckout\Core\Order\Builder\Node\ShippingNodeBuilder(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\GenderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\GenderRepository'] : ($this->services['PsCheckout\\Infrastructure\\Repository\\GenderRepository'] = new \PsCheckout\Infrastructure\Repository\GenderRepository())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\CountryRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\CountryRepository'] : $this->getCountryRepository2Service()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\StateRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\StateRepository'] : ($this->services['PsCheckout\\Infrastructure\\Repository\\StateRepository'] = new \PsCheckout\Infrastructure\Repository\StateRepository())) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\Order\Builder\Node\SupplementaryDataNodeBuilder' shared service.
     *
     * @return \PsCheckout\Core\Order\Builder\Node\SupplementaryDataNodeBuilder
     */
    protected function getSupplementaryDataNodeBuilderService()
    {
        return $this->services['PsCheckout\\Core\\Order\\Builder\\Node\\SupplementaryDataNodeBuilder'] = new \PsCheckout\Core\Order\Builder\Node\SupplementaryDataNodeBuilder(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\CountryRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\CountryRepository'] : $this->getCountryRepository2Service()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\StateRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\StateRepository'] : ($this->services['PsCheckout\\Infrastructure\\Repository\\StateRepository'] = new \PsCheckout\Infrastructure\Repository\StateRepository())) && false ?: '_'});
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
     * Gets the public 'PsCheckout\Core\Order\Exception\Handler\OrderCreationExceptionHandler' shared service.
     *
     * @return \PsCheckout\Core\Order\Exception\Handler\OrderCreationExceptionHandler
     */
    protected function getOrderCreationExceptionHandlerService()
    {
        return $this->services['PsCheckout\\Core\\Order\\Exception\\Handler\\OrderCreationExceptionHandler'] = new \PsCheckout\Core\Order\Exception\Handler\OrderCreationExceptionHandler(${($_ = isset($this->services['PsCheckout\\Module\\Presentation\\Translator']) ? $this->services['PsCheckout\\Module\\Presentation\\Translator'] : $this->getTranslatorService()) && false ?: '_'}, ${($_ = isset($this->services['Psr\\Log\\LoggerInterface']) ? $this->services['Psr\\Log\\LoggerInterface'] : $this->getLoggerInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Action\\CustomerNotifyAction']) ? $this->services['PsCheckout\\Infrastructure\\Action\\CustomerNotifyAction'] : $this->getCustomerNotifyActionService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\Order\Processor\CreateOrderProcessor' shared service.
     *
     * @return \PsCheckout\Core\Order\Processor\CreateOrderProcessor
     */
    protected function getCreateOrderProcessorService()
    {
        return $this->services['PsCheckout\\Core\\Order\\Processor\\CreateOrderProcessor'] = new \PsCheckout\Core\Order\Processor\CreateOrderProcessor(${($_ = isset($this->services['PsCheckout\\Core\\Order\\Validator\\OrderAuthorizationValidator']) ? $this->services['PsCheckout\\Core\\Order\\Validator\\OrderAuthorizationValidator'] : $this->getOrderAuthorizationValidatorService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\Order\\Action\\CreateOrderAction']) ? $this->services['PsCheckout\\Core\\Order\\Action\\CreateOrderAction'] : $this->getCreateOrderActionService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\CartRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\CartRepository'] : ($this->services['PsCheckout\\Infrastructure\\Repository\\CartRepository'] = new \PsCheckout\Infrastructure\Repository\CartRepository())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Context']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] = new \PsCheckout\Infrastructure\Adapter\Context())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\Order\\Validator\\CheckoutValidator']) ? $this->services['PsCheckout\\Core\\Order\\Validator\\CheckoutValidator'] : $this->getCheckoutValidatorService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Action\\CapturePayPalOrderAction']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Action\\CapturePayPalOrderAction'] : $this->getCapturePayPalOrderActionService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PaymentToken\\Action\\SavePaymentTokenAction']) ? $this->services['PsCheckout\\Core\\PaymentToken\\Action\\SavePaymentTokenAction'] : $this->getSavePaymentTokenActionService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Provider\\PayPalOrderProvider']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Provider\\PayPalOrderProvider'] : $this->getPayPalOrderProviderService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository'] : $this->getPayPalOrderRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PaymentToken\\Action\\DeletePaymentTokenAction']) ? $this->services['PsCheckout\\Core\\PaymentToken\\Action\\DeletePaymentTokenAction'] : $this->getDeletePaymentTokenActionService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\Order\Validator\CheckoutValidator' shared service.
     *
     * @return \PsCheckout\Core\Order\Validator\CheckoutValidator
     */
    protected function getCheckoutValidatorService()
    {
        return $this->services['PsCheckout\\Core\\Order\\Validator\\CheckoutValidator'] = new \PsCheckout\Core\Order\Validator\CheckoutValidator(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository'] : $this->getPayPalOrderRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository'] : ($this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository'] = new \PsCheckout\Infrastructure\Repository\OrderRepository())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\CartRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\CartRepository'] : ($this->services['PsCheckout\\Infrastructure\\Repository\\CartRepository'] = new \PsCheckout\Infrastructure\Repository\CartRepository())) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\Order\Validator\OrderAmountValidator' shared service.
     *
     * @return \PsCheckout\Core\Order\Validator\OrderAmountValidator
     */
    protected function getOrderAmountValidatorService()
    {
        return $this->services['PsCheckout\\Core\\Order\\Validator\\OrderAmountValidator'] = new \PsCheckout\Core\Order\Validator\OrderAmountValidator();
    }

    /**
     * Gets the public 'PsCheckout\Core\Order\Validator\OrderAuthorizationValidator' shared service.
     *
     * @return \PsCheckout\Core\Order\Validator\OrderAuthorizationValidator
     */
    protected function getOrderAuthorizationValidatorService()
    {
        return $this->services['PsCheckout\\Core\\Order\\Validator\\OrderAuthorizationValidator'] = new \PsCheckout\Core\Order\Validator\OrderAuthorizationValidator(${($_ = isset($this->services['Psr\\Log\\LoggerInterface']) ? $this->services['Psr\\Log\\LoggerInterface'] : $this->getLoggerInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Customer']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Customer'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Customer'] = new \PsCheckout\Infrastructure\Adapter\Customer())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Cart']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Cart'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Cart'] = new \PsCheckout\Infrastructure\Adapter\Cart())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Card3DSecure\\Card3DSecureValidator']) ? $this->services['PsCheckout\\Core\\PayPal\\Card3DSecure\\Card3DSecureValidator'] : ($this->services['PsCheckout\\Core\\PayPal\\Card3DSecure\\Card3DSecureValidator'] = new \PsCheckout\Core\PayPal\Card3DSecure\Card3DSecureValidator())) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\ApplePay\Builder\ApplePayPaymentRequestDataBuilder' shared service.
     *
     * @return \PsCheckout\Core\PayPal\ApplePay\Builder\ApplePayPaymentRequestDataBuilder
     */
    protected function getApplePayPaymentRequestDataBuilderService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\ApplePay\\Builder\\ApplePayPaymentRequestDataBuilder'] = new \PsCheckout\Core\PayPal\ApplePay\Builder\ApplePayPaymentRequestDataBuilder(${($_ = isset($this->services['PsCheckout\\Core\\Order\\Builder\\OrderPayloadBuilder']) ? $this->services['PsCheckout\\Core\\Order\\Builder\\OrderPayloadBuilder'] : $this->getOrderPayloadBuilderService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Presentation\\Presenter\\Cart\\CartPresenter']) ? $this->services['PsCheckout\\Presentation\\Presenter\\Cart\\CartPresenter'] : $this->getCartPresenterService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Module\\Presentation\\Translator']) ? $this->services['PsCheckout\\Module\\Presentation\\Translator'] : $this->getTranslatorService()) && false ?: '_'});
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
     * Gets the public 'PsCheckout\Core\PayPal\GooglePay\Builder\GooglePayPaymentRequestDataBuilder' shared service.
     *
     * @return \PsCheckout\Core\PayPal\GooglePay\Builder\GooglePayPaymentRequestDataBuilder
     */
    protected function getGooglePayPaymentRequestDataBuilderService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\GooglePay\\Builder\\GooglePayPaymentRequestDataBuilder'] = new \PsCheckout\Core\PayPal\GooglePay\Builder\GooglePayPaymentRequestDataBuilder(${($_ = isset($this->services['PsCheckout\\Core\\Order\\Builder\\OrderPayloadBuilder']) ? $this->services['PsCheckout\\Core\\Order\\Builder\\OrderPayloadBuilder'] : $this->getOrderPayloadBuilderService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Presentation\\Presenter\\Cart\\CartPresenter']) ? $this->services['PsCheckout\\Presentation\\Presenter\\Cart\\CartPresenter'] : $this->getCartPresenterService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Module\\Presentation\\Translator']) ? $this->services['PsCheckout\\Module\\Presentation\\Translator'] : $this->getTranslatorService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\OAuth\OAuthService' shared service.
     *
     * @return \PsCheckout\Core\PayPal\OAuth\OAuthService
     */
    protected function getOAuthServiceService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\OAuth\\OAuthService'] = new \PsCheckout\Core\PayPal\OAuth\OAuthService(${($_ = isset($this->services['PsCheckout\\Api\\Http\\CheckoutHttpClient']) ? $this->services['PsCheckout\\Api\\Http\\CheckoutHttpClient'] : $this->getCheckoutHttpClientService()) && false ?: '_'});
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
     * Gets the public 'PsCheckout\Core\PayPal\Order\Action\CancelPayPalOrderAction' shared service.
     *
     * @return \PsCheckout\Core\PayPal\Order\Action\CancelPayPalOrderAction
     */
    protected function getCancelPayPalOrderActionService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\Order\\Action\\CancelPayPalOrderAction'] = new \PsCheckout\Core\PayPal\Order\Action\CancelPayPalOrderAction(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository'] : $this->getPayPalOrderRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\Order\Action\CapturePayPalOrderAction' shared service.
     *
     * @return \PsCheckout\Core\PayPal\Order\Action\CapturePayPalOrderAction
     */
    protected function getCapturePayPalOrderActionService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\Order\\Action\\CapturePayPalOrderAction'] = new \PsCheckout\Core\PayPal\Order\Action\CapturePayPalOrderAction(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository'] : $this->getPayPalOrderRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Api\\Http\\OrderHttpClient']) ? $this->services['PsCheckout\\Api\\Http\\OrderHttpClient'] : $this->getOrderHttpClientService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Cache\\PayPalOrderCache']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Cache\\PayPalOrderCache'] : $this->getPayPalOrderCacheService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\OrderCompletedEventHandler']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\OrderCompletedEventHandler'] : $this->getOrderCompletedEventHandlerService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentPendingEventHandler']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentPendingEventHandler'] : $this->getPaymentPendingEventHandlerService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentCompletedEventHandler']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentCompletedEventHandler'] : $this->getPaymentCompletedEventHandlerService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentDeniedEventHandler']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentDeniedEventHandler'] : $this->getPaymentDeniedEventHandlerService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Provider\\PayPalOrderProvider']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Provider\\PayPalOrderProvider'] : $this->getPayPalOrderProviderService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\Order\Action\CreatePayPalOrderAction' shared service.
     *
     * @return \PsCheckout\Core\PayPal\Order\Action\CreatePayPalOrderAction
     */
    protected function getCreatePayPalOrderActionService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\Order\\Action\\CreatePayPalOrderAction'] = new \PsCheckout\Core\PayPal\Order\Action\CreatePayPalOrderAction(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Context']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] = new \PsCheckout\Infrastructure\Adapter\Context())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalCustomerRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalCustomerRepository'] : $this->getPayPalCustomerRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository'] : $this->getPayPalOrderRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Api\\Http\\OrderHttpClient']) ? $this->services['PsCheckout\\Api\\Http\\OrderHttpClient'] : $this->getOrderHttpClientService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\Order\\Builder\\OrderPayloadBuilder']) ? $this->services['PsCheckout\\Core\\Order\\Builder\\OrderPayloadBuilder'] : $this->getOrderPayloadBuilderService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Presentation\\Presenter\\Cart\\CartPresenter']) ? $this->services['PsCheckout\\Presentation\\Presenter\\Cart\\CartPresenter'] : $this->getCartPresenterService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Processor\\CreatePayPalOrderProcessor']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Processor\\CreatePayPalOrderProcessor'] : $this->getCreatePayPalOrderProcessorService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Cache\\PayPalOrderCache']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Cache\\PayPalOrderCache'] : $this->getPayPalOrderCacheService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PaymentToken\\Action\\DeletePaymentTokenAction']) ? $this->services['PsCheckout\\Core\\PaymentToken\\Action\\DeletePaymentTokenAction'] : $this->getDeletePaymentTokenActionService()) && false ?: '_'});
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
     * Gets the public 'PsCheckout\Core\PayPal\Order\Handler\OrderApprovalReversedEventHandler' shared service.
     *
     * @return \PsCheckout\Core\PayPal\Order\Handler\OrderApprovalReversedEventHandler
     */
    protected function getOrderApprovalReversedEventHandlerService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\OrderApprovalReversedEventHandler'] = new \PsCheckout\Core\PayPal\Order\Handler\OrderApprovalReversedEventHandler(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository'] : $this->getPayPalOrderRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\OrderStatus\\Action\\PayPalCheckOrderStatusAction']) ? $this->services['PsCheckout\\Core\\PayPal\\OrderStatus\\Action\\PayPalCheckOrderStatusAction'] : ($this->services['PsCheckout\\Core\\PayPal\\OrderStatus\\Action\\PayPalCheckOrderStatusAction'] = new \PsCheckout\Core\PayPal\OrderStatus\Action\PayPalCheckOrderStatusAction())) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\Order\Handler\OrderApprovedEventHandler' shared service.
     *
     * @return \PsCheckout\Core\PayPal\Order\Handler\OrderApprovedEventHandler
     */
    protected function getOrderApprovedEventHandlerService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\OrderApprovedEventHandler'] = new \PsCheckout\Core\PayPal\Order\Handler\OrderApprovedEventHandler(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository'] : $this->getPayPalOrderRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\OrderStatus\\Action\\PayPalCheckOrderStatusAction']) ? $this->services['PsCheckout\\Core\\PayPal\\OrderStatus\\Action\\PayPalCheckOrderStatusAction'] : ($this->services['PsCheckout\\Core\\PayPal\\OrderStatus\\Action\\PayPalCheckOrderStatusAction'] = new \PsCheckout\Core\PayPal\OrderStatus\Action\PayPalCheckOrderStatusAction())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Card3DSecure\\Card3DSecureValidator']) ? $this->services['PsCheckout\\Core\\PayPal\\Card3DSecure\\Card3DSecureValidator'] : ($this->services['PsCheckout\\Core\\PayPal\\Card3DSecure\\Card3DSecureValidator'] = new \PsCheckout\Core\PayPal\Card3DSecure\Card3DSecureValidator())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Action\\CapturePayPalOrderAction']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Action\\CapturePayPalOrderAction'] : $this->getCapturePayPalOrderActionService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Action\\UpdatePayPalOrderPurchaseUnitAction']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Action\\UpdatePayPalOrderPurchaseUnitAction'] : $this->getUpdatePayPalOrderPurchaseUnitActionService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\Order\Handler\OrderCompletedEventHandler' shared service.
     *
     * @return \PsCheckout\Core\PayPal\Order\Handler\OrderCompletedEventHandler
     */
    protected function getOrderCompletedEventHandlerService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\OrderCompletedEventHandler'] = new \PsCheckout\Core\PayPal\Order\Handler\OrderCompletedEventHandler(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository'] : $this->getPayPalOrderRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\OrderStatus\\Action\\PayPalCheckOrderStatusAction']) ? $this->services['PsCheckout\\Core\\PayPal\\OrderStatus\\Action\\PayPalCheckOrderStatusAction'] : ($this->services['PsCheckout\\Core\\PayPal\\OrderStatus\\Action\\PayPalCheckOrderStatusAction'] = new \PsCheckout\Core\PayPal\OrderStatus\Action\PayPalCheckOrderStatusAction())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Action\\UpdatePayPalOrderPurchaseUnitAction']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Action\\UpdatePayPalOrderPurchaseUnitAction'] : $this->getUpdatePayPalOrderPurchaseUnitActionService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Card3DSecure\\Card3DSecureValidator']) ? $this->services['PsCheckout\\Core\\PayPal\\Card3DSecure\\Card3DSecureValidator'] : ($this->services['PsCheckout\\Core\\PayPal\\Card3DSecure\\Card3DSecureValidator'] = new \PsCheckout\Core\PayPal\Card3DSecure\Card3DSecureValidator())) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\Order\Handler\PayPalEventDispatcher' shared service.
     *
     * @return \PsCheckout\Core\PayPal\Order\Handler\PayPalEventDispatcher
     */
    protected function getPayPalEventDispatcherService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\PayPalEventDispatcher'] = new \PsCheckout\Core\PayPal\Order\Handler\PayPalEventDispatcher(${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentCompletedEventHandler']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentCompletedEventHandler'] : $this->getPaymentCompletedEventHandlerService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentPendingEventHandler']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentPendingEventHandler'] : $this->getPaymentPendingEventHandlerService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentDeniedEventHandler']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentDeniedEventHandler'] : $this->getPaymentDeniedEventHandlerService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentRefundedEventHandler']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentRefundedEventHandler'] : $this->getPaymentRefundedEventHandlerService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentReversedEventHandler']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentReversedEventHandler'] : $this->getPaymentReversedEventHandlerService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\OrderApprovedEventHandler']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\OrderApprovedEventHandler'] : $this->getOrderApprovedEventHandlerService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\OrderCompletedEventHandler']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\OrderCompletedEventHandler'] : $this->getOrderCompletedEventHandlerService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\OrderApprovalReversedEventHandler']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\OrderApprovalReversedEventHandler'] : $this->getOrderApprovalReversedEventHandlerService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\Order\Handler\PaymentCompletedEventHandler' shared service.
     *
     * @return \PsCheckout\Core\PayPal\Order\Handler\PaymentCompletedEventHandler
     */
    protected function getPaymentCompletedEventHandlerService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentCompletedEventHandler'] = new \PsCheckout\Core\PayPal\Order\Handler\PaymentCompletedEventHandler(${($_ = isset($this->services['PsCheckout\\Core\\Order\\Action\\CreateOrderAction']) ? $this->services['PsCheckout\\Core\\Order\\Action\\CreateOrderAction'] : $this->getCreateOrderActionService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\Order\\Action\\CreateOrderPaymentAction']) ? $this->services['PsCheckout\\Core\\Order\\Action\\CreateOrderPaymentAction'] : $this->getCreateOrderPaymentActionService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\OrderState\\Action\\SetCompletedOrderStateAction']) ? $this->services['PsCheckout\\Core\\OrderState\\Action\\SetCompletedOrderStateAction'] : $this->getSetCompletedOrderStateActionService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\Order\Handler\PaymentDeniedEventHandler' shared service.
     *
     * @return \PsCheckout\Core\PayPal\Order\Handler\PaymentDeniedEventHandler
     */
    protected function getPaymentDeniedEventHandlerService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentDeniedEventHandler'] = new \PsCheckout\Core\PayPal\Order\Handler\PaymentDeniedEventHandler(${($_ = isset($this->services['PsCheckout\\Core\\OrderState\\Action\\SetDeclinedOrderStateAction']) ? $this->services['PsCheckout\\Core\\OrderState\\Action\\SetDeclinedOrderStateAction'] : $this->getSetDeclinedOrderStateActionService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\Order\Handler\PaymentPendingEventHandler' shared service.
     *
     * @return \PsCheckout\Core\PayPal\Order\Handler\PaymentPendingEventHandler
     */
    protected function getPaymentPendingEventHandlerService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentPendingEventHandler'] = new \PsCheckout\Core\PayPal\Order\Handler\PaymentPendingEventHandler(${($_ = isset($this->services['PsCheckout\\Core\\Order\\Action\\CreateOrderAction']) ? $this->services['PsCheckout\\Core\\Order\\Action\\CreateOrderAction'] : $this->getCreateOrderActionService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\OrderState\\Action\\SetPendingOrderStateAction']) ? $this->services['PsCheckout\\Core\\OrderState\\Action\\SetPendingOrderStateAction'] : $this->getSetPendingOrderStateActionService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\Order\Handler\PaymentRefundedEventHandler' shared service.
     *
     * @return \PsCheckout\Core\PayPal\Order\Handler\PaymentRefundedEventHandler
     */
    protected function getPaymentRefundedEventHandlerService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentRefundedEventHandler'] = new \PsCheckout\Core\PayPal\Order\Handler\PaymentRefundedEventHandler(${($_ = isset($this->services['PsCheckout\\Core\\OrderState\\Action\\SetRefundedOrderStateAction']) ? $this->services['PsCheckout\\Core\\OrderState\\Action\\SetRefundedOrderStateAction'] : $this->getSetRefundedOrderStateActionService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\Order\Handler\PaymentReversedEventHandler' shared service.
     *
     * @return \PsCheckout\Core\PayPal\Order\Handler\PaymentReversedEventHandler
     */
    protected function getPaymentReversedEventHandlerService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\Order\\Handler\\PaymentReversedEventHandler'] = new \PsCheckout\Core\PayPal\Order\Handler\PaymentReversedEventHandler(${($_ = isset($this->services['PsCheckout\\Core\\OrderState\\Action\\SetReversedOrderStateAction']) ? $this->services['PsCheckout\\Core\\OrderState\\Action\\SetReversedOrderStateAction'] : $this->getSetReversedOrderStateActionService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\Order\Processor\CreatePayPalOrderProcessor' shared service.
     *
     * @return \PsCheckout\Core\PayPal\Order\Processor\CreatePayPalOrderProcessor
     */
    protected function getCreatePayPalOrderProcessorService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\Order\\Processor\\CreatePayPalOrderProcessor'] = new \PsCheckout\Core\PayPal\Order\Processor\CreatePayPalOrderProcessor(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Context']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] = new \PsCheckout\Infrastructure\Adapter\Context())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalCustomerRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalCustomerRepository'] : $this->getPayPalCustomerRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PaymentTokenRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PaymentTokenRepository'] : $this->getPaymentTokenRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository'] : $this->getPayPalOrderRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderPurchaseUnitRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderPurchaseUnitRepository'] : $this->getPayPalOrderPurchaseUnitRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderCaptureRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderCaptureRepository'] : $this->getPayPalOrderCaptureRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderAuthorizationRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderAuthorizationRepository'] : $this->getPayPalOrderAuthorizationRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRefundRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRefundRepository'] : $this->getPayPalOrderRefundRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\Order\Processor\UpdateExternalPayPalOrderProcessor' shared service.
     *
     * @return \PsCheckout\Core\PayPal\Order\Processor\UpdateExternalPayPalOrderProcessor
     */
    protected function getUpdateExternalPayPalOrderProcessorService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\Order\\Processor\\UpdateExternalPayPalOrderProcessor'] = new \PsCheckout\Core\PayPal\Order\Processor\UpdateExternalPayPalOrderProcessor(${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Provider\\PayPalOrderProvider']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Provider\\PayPalOrderProvider'] : $this->getPayPalOrderProviderService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Presentation\\Presenter\\Cart\\CartPresenter']) ? $this->services['PsCheckout\\Presentation\\Presenter\\Cart\\CartPresenter'] : $this->getCartPresenterService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\Order\\Builder\\OrderPayloadBuilder']) ? $this->services['PsCheckout\\Core\\Order\\Builder\\OrderPayloadBuilder'] : $this->getOrderPayloadBuilderService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Api\\Http\\OrderHttpClient']) ? $this->services['PsCheckout\\Api\\Http\\OrderHttpClient'] : $this->getOrderHttpClientService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository'] : $this->getPayPalOrderRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Cache\\PayPalOrderCache']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Cache\\PayPalOrderCache'] : $this->getPayPalOrderCacheService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Action\\UpdatePayPalOrderPurchaseUnitAction']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Action\\UpdatePayPalOrderPurchaseUnitAction'] : $this->getUpdatePayPalOrderPurchaseUnitActionService()) && false ?: '_'});
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
     * Gets the public 'PsCheckout\Core\PayPal\Order\Provider\PayPalOrderTranslationProvider' shared service.
     *
     * @return \PsCheckout\Core\PayPal\Order\Provider\PayPalOrderTranslationProvider
     */
    protected function getPayPalOrderTranslationProviderService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\Order\\Provider\\PayPalOrderTranslationProvider'] = new \PsCheckout\Core\PayPal\Order\Provider\PayPalOrderTranslationProvider(${($_ = isset($this->services['PsCheckout\\Module\\Presentation\\Translator']) ? $this->services['PsCheckout\\Module\\Presentation\\Translator'] : $this->getTranslatorService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\PayPal\Order\Validator\CreatedPayPalOrderValidator' shared service.
     *
     * @return \PsCheckout\Core\PayPal\Order\Validator\CreatedPayPalOrderValidator
     */
    protected function getCreatedPayPalOrderValidatorService()
    {
        return $this->services['PsCheckout\\Core\\PayPal\\Order\\Validator\\CreatedPayPalOrderValidator'] = new \PsCheckout\Core\PayPal\Order\Validator\CreatedPayPalOrderValidator(${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Provider\\PayPalOrderProvider']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Provider\\PayPalOrderProvider'] : $this->getPayPalOrderProviderService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository'] : ($this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository'] = new \PsCheckout\Infrastructure\Repository\OrderRepository())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Cart']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Cart'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Cart'] = new \PsCheckout\Infrastructure\Adapter\Cart())) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->id);
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
     * Gets the public 'PsCheckout\Core\PaymentToken\Action\SavePaymentTokenAction' shared service.
     *
     * @return \PsCheckout\Core\PaymentToken\Action\SavePaymentTokenAction
     */
    protected function getSavePaymentTokenActionService()
    {
        return $this->services['PsCheckout\\Core\\PaymentToken\\Action\\SavePaymentTokenAction'] = new \PsCheckout\Core\PaymentToken\Action\SavePaymentTokenAction(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalCustomerRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalCustomerRepository'] : $this->getPayPalCustomerRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository'] : $this->getPayPalOrderRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PaymentTokenRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PaymentTokenRepository'] : $this->getPaymentTokenRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Context']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] = new \PsCheckout\Infrastructure\Adapter\Context())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['Psr\\Log\\LoggerInterface']) ? $this->services['Psr\\Log\\LoggerInterface'] : $this->getLoggerInterfaceService()) && false ?: '_'});
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
     * Gets the public 'PsCheckout\Core\Settings\Configuration\PayPalSdkConfiguration' shared service.
     *
     * @return \PsCheckout\Core\Settings\Configuration\PayPalSdkConfiguration
     */
    protected function getPayPalSdkConfigurationService()
    {
        return $this->services['PsCheckout\\Core\\Settings\\Configuration\\PayPalSdkConfiguration'] = new \PsCheckout\Core\Settings\Configuration\PayPalSdkConfiguration(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Context']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] = new \PsCheckout\Infrastructure\Adapter\Context())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\Settings\\Configuration\\PayPalConfiguration']) ? $this->services['PsCheckout\\Core\\Settings\\Configuration\\PayPalConfiguration'] : $this->getPayPalConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Environment\\Env']) ? $this->services['PsCheckout\\Infrastructure\\Environment\\Env'] : $this->getEnv3Service()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourcePresenter']) ? $this->services['PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourcePresenter'] : $this->getFundingSourcePresenterService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalCustomerRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalCustomerRepository'] : $this->getPayPalCustomerRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\OAuth\\OAuthService']) ? $this->services['PsCheckout\\Core\\PayPal\\OAuth\\OAuthService'] : $this->getOAuthServiceService()) && false ?: '_'}, ${($_ = isset($this->services['Psr\\Log\\LoggerInterface']) ? $this->services['Psr\\Log\\LoggerInterface'] : $this->getLoggerInterfaceService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\WebhookDispatcher\Action\CheckPSLSignatureAction' shared service.
     *
     * @return \PsCheckout\Core\WebhookDispatcher\Action\CheckPSLSignatureAction
     */
    protected function getCheckPSLSignatureActionService()
    {
        return $this->services['PsCheckout\\Core\\WebhookDispatcher\\Action\\CheckPSLSignatureAction'] = new \PsCheckout\Core\WebhookDispatcher\Action\CheckPSLSignatureAction(${($_ = isset($this->services['PsCheckout\\Api\\Http\\OrderHttpClient']) ? $this->services['PsCheckout\\Api\\Http\\OrderHttpClient'] : $this->getOrderHttpClientService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\WebhookDispatcher\Provider\WebhookBodyProvider' shared service.
     *
     * @return \PsCheckout\Core\WebhookDispatcher\Provider\WebhookBodyProvider
     */
    protected function getWebhookBodyProviderService()
    {
        return $this->services['PsCheckout\\Core\\WebhookDispatcher\\Provider\\WebhookBodyProvider'] = new \PsCheckout\Core\WebhookDispatcher\Provider\WebhookBodyProvider(${($_ = isset($this->services['PsCheckout\\Utility\\Common\\InputStreamUtility']) ? $this->services['PsCheckout\\Utility\\Common\\InputStreamUtility'] : ($this->services['PsCheckout\\Utility\\Common\\InputStreamUtility'] = new \PsCheckout\Utility\Common\InputStreamUtility())) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\WebhookDispatcher\Provider\WebhookHeaderProvider' shared service.
     *
     * @return \PsCheckout\Core\WebhookDispatcher\Provider\WebhookHeaderProvider
     */
    protected function getWebhookHeaderProviderService()
    {
        return $this->services['PsCheckout\\Core\\WebhookDispatcher\\Provider\\WebhookHeaderProvider'] = new \PsCheckout\Core\WebhookDispatcher\Provider\WebhookHeaderProvider();
    }

    /**
     * Gets the public 'PsCheckout\Core\WebhookDispatcher\Validator\BodyValuesValidator' shared service.
     *
     * @return \PsCheckout\Core\WebhookDispatcher\Validator\BodyValuesValidator
     */
    protected function getBodyValuesValidatorService()
    {
        return $this->services['PsCheckout\\Core\\WebhookDispatcher\\Validator\\BodyValuesValidator'] = new \PsCheckout\Core\WebhookDispatcher\Validator\BodyValuesValidator(${($_ = isset($this->services['PsCheckout\\Core\\WebhookDispatcher\\Provider\\WebhookBodyProvider']) ? $this->services['PsCheckout\\Core\\WebhookDispatcher\\Provider\\WebhookBodyProvider'] : $this->getWebhookBodyProviderService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\WebhookDispatcher\Validator\HeaderValuesValidator' shared service.
     *
     * @return \PsCheckout\Core\WebhookDispatcher\Validator\HeaderValuesValidator
     */
    protected function getHeaderValuesValidatorService()
    {
        return $this->services['PsCheckout\\Core\\WebhookDispatcher\\Validator\\HeaderValuesValidator'] = new \PsCheckout\Core\WebhookDispatcher\Validator\HeaderValuesValidator(${($_ = isset($this->services['PsCheckout\\Core\\WebhookDispatcher\\Provider\\WebhookHeaderProvider']) ? $this->services['PsCheckout\\Core\\WebhookDispatcher\\Provider\\WebhookHeaderProvider'] : ($this->services['PsCheckout\\Core\\WebhookDispatcher\\Provider\\WebhookHeaderProvider'] = new \PsCheckout\Core\WebhookDispatcher\Provider\WebhookHeaderProvider())) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\WebhookDispatcher\Validator\WebhookShopIdValidator' shared service.
     *
     * @return \PsCheckout\Core\WebhookDispatcher\Validator\WebhookShopIdValidator
     */
    protected function getWebhookShopIdValidatorService()
    {
        return $this->services['PsCheckout\\Core\\WebhookDispatcher\\Validator\\WebhookShopIdValidator'] = new \PsCheckout\Core\WebhookDispatcher\Validator\WebhookShopIdValidator(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PsAccountRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PsAccountRepository'] : $this->getPsAccountRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\Webhook\Handler\WebhookEventConfigurationUpdatedHandler' shared service.
     *
     * @return \PsCheckout\Core\Webhook\Handler\WebhookEventConfigurationUpdatedHandler
     */
    protected function getWebhookEventConfigurationUpdatedHandlerService()
    {
        return $this->services['PsCheckout\\Core\\Webhook\\Handler\\WebhookEventConfigurationUpdatedHandler'] = new \PsCheckout\Core\Webhook\Handler\WebhookEventConfigurationUpdatedHandler(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Core\Webhook\Handler\WebhookHandler' shared service.
     *
     * @return \PsCheckout\Core\Webhook\Handler\WebhookHandler
     */
    protected function getWebhookHandlerService()
    {
        return $this->services['PsCheckout\\Core\\Webhook\\Handler\\WebhookHandler'] = new \PsCheckout\Core\Webhook\Handler\WebhookHandler(${($_ = isset($this->services['PsCheckout\\Core\\Webhook\\Service\\WebhookSecretToken']) ? $this->services['PsCheckout\\Core\\Webhook\\Service\\WebhookSecretToken'] : $this->getWebhookSecretTokenService()) && false ?: '_'}, [0 => ${($_ = isset($this->services['PsCheckout\\Core\\Webhook\\Handler\\WebhookEventConfigurationUpdatedHandler']) ? $this->services['PsCheckout\\Core\\Webhook\\Handler\\WebhookEventConfigurationUpdatedHandler'] : $this->getWebhookEventConfigurationUpdatedHandlerService()) && false ?: '_'}]);
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
     * Gets the public 'PsCheckout\Infrastructure\Action\AddProductToCartAction' shared service.
     *
     * @return \PsCheckout\Infrastructure\Action\AddProductToCartAction
     */
    protected function getAddProductToCartActionService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Action\\AddProductToCartAction'] = new \PsCheckout\Infrastructure\Action\AddProductToCartAction(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Context']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] = new \PsCheckout\Infrastructure\Adapter\Context())) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Action\CreateOrUpdateAddressAction' shared service.
     *
     * @return \PsCheckout\Infrastructure\Action\CreateOrUpdateAddressAction
     */
    protected function getCreateOrUpdateAddressActionService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Action\\CreateOrUpdateAddressAction'] = new \PsCheckout\Infrastructure\Action\CreateOrUpdateAddressAction(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Context']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] = new \PsCheckout\Infrastructure\Adapter\Context())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Country']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Country'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Country'] = new \PsCheckout\Infrastructure\Adapter\Country())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\CountryRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\CountryRepository'] : $this->getCountryRepository2Service()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\AddressRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\AddressRepository'] : $this->getAddressRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Action\CustomerAuthenticationAction' shared service.
     *
     * @return \PsCheckout\Infrastructure\Action\CustomerAuthenticationAction
     */
    protected function getCustomerAuthenticationActionService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Action\\CustomerAuthenticationAction'] = new \PsCheckout\Infrastructure\Action\CustomerAuthenticationAction(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Customer']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Customer'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Customer'] = new \PsCheckout\Infrastructure\Adapter\Customer())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Context']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] = new \PsCheckout\Infrastructure\Adapter\Context())) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Action\CustomerNotifyAction' shared service.
     *
     * @return \PsCheckout\Infrastructure\Action\CustomerNotifyAction
     */
    protected function getCustomerNotifyActionService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Action\\CustomerNotifyAction'] = new \PsCheckout\Infrastructure\Action\CustomerNotifyAction(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository'] : $this->getPayPalOrderRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository'] : ($this->services['PsCheckout\\Infrastructure\\Repository\\OrderRepository'] = new \PsCheckout\Infrastructure\Repository\OrderRepository())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Module\\Presentation\\Translator']) ? $this->services['PsCheckout\\Module\\Presentation\\Translator'] : $this->getTranslatorService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.db']) ? $this->services['ps_checkout.db'] : $this->getPsCheckout_DbService()) && false ?: '_'});
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
     * Gets the public 'PsCheckout\Infrastructure\Environment\Env' shared service.
     *
     * @return \PsCheckout\Infrastructure\Environment\Env
     */
    protected function getEnv3Service()
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
    protected function getCountryRepository2Service()
    {
        return $this->services['PsCheckout\\Infrastructure\\Repository\\CountryRepository'] = new \PsCheckout\Infrastructure\Repository\CountryRepository(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->name);
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Repository\CurrencyRepository' shared service.
     *
     * @return \PsCheckout\Infrastructure\Repository\CurrencyRepository
     */
    protected function getCurrencyRepository2Service()
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
    protected function getLanguageRepository2Service()
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
     * Gets the public 'PsCheckout\Infrastructure\Repository\StateRepository' shared service.
     *
     * @return \PsCheckout\Infrastructure\Repository\StateRepository
     */
    protected function getStateRepository2Service()
    {
        return $this->services['PsCheckout\\Infrastructure\\Repository\\StateRepository'] = new \PsCheckout\Infrastructure\Repository\StateRepository();
    }

    /**
     * Gets the public 'PsCheckout\Infrastructure\Validator\FrontControllerValidator' shared service.
     *
     * @return \PsCheckout\Infrastructure\Validator\FrontControllerValidator
     */
    protected function getFrontControllerValidatorService()
    {
        return $this->services['PsCheckout\\Infrastructure\\Validator\\FrontControllerValidator'] = new \PsCheckout\Infrastructure\Validator\FrontControllerValidator(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'});
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
     * Gets the public 'PsCheckout\Presentation\Presenter\Cart\CartPresenter' shared service.
     *
     * @return \PsCheckout\Presentation\Presenter\Cart\CartPresenter
     */
    protected function getCartPresenterService()
    {
        return $this->services['PsCheckout\\Presentation\\Presenter\\Cart\\CartPresenter'] = new \PsCheckout\Presentation\Presenter\Cart\CartPresenter(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Context']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] = new \PsCheckout\Infrastructure\Adapter\Context())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Address']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Address'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Address'] = new \PsCheckout\Infrastructure\Adapter\Address())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Currency']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Currency'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Currency'] = new \PsCheckout\Infrastructure\Adapter\Currency())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\LanguageRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\LanguageRepository'] : ($this->services['PsCheckout\\Infrastructure\\Repository\\LanguageRepository'] = new \PsCheckout\Infrastructure\Repository\LanguageRepository())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\CustomerRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\CustomerRepository'] : ($this->services['PsCheckout\\Infrastructure\\Repository\\CustomerRepository'] = new \PsCheckout\Infrastructure\Repository\CustomerRepository())) && false ?: '_'});
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
     * Gets the public 'PsCheckout\Presentation\Presenter\OrderSummary\OrderSummaryPresenter' shared service.
     *
     * @return \PsCheckout\Presentation\Presenter\OrderSummary\OrderSummaryPresenter
     */
    protected function getOrderSummaryPresenterService()
    {
        return $this->services['PsCheckout\\Presentation\\Presenter\\OrderSummary\\OrderSummaryPresenter'] = new \PsCheckout\Presentation\Presenter\OrderSummary\OrderSummaryPresenter(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Link']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Link'] : $this->getLinkService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Module\\Presentation\\Translator']) ? $this->services['PsCheckout\\Module\\Presentation\\Translator'] : $this->getTranslatorService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository'] : $this->getPayPalOrderRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Provider\\PayPalOrderProvider']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Provider\\PayPalOrderProvider'] : $this->getPayPalOrderProviderService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourceTranslationProvider']) ? $this->services['PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourceTranslationProvider'] : $this->getFundingSourceTranslationProviderService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\PayPal\\Order\\Provider\\PayPalOrderTranslationProvider']) ? $this->services['PsCheckout\\Core\\PayPal\\Order\\Provider\\PayPalOrderTranslationProvider'] : $this->getPayPalOrderTranslationProviderService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Presentation\Presenter\Settings\Front\FrontSettingsPresenter' shared service.
     *
     * @return \PsCheckout\Presentation\Presenter\Settings\Front\FrontSettingsPresenter
     */
    protected function getFrontSettingsPresenterService()
    {
        return $this->services['PsCheckout\\Presentation\\Presenter\\Settings\\Front\\FrontSettingsPresenter'] = new \PsCheckout\Presentation\Presenter\Settings\Front\FrontSettingsPresenter([0 => ${($_ = isset($this->services['PsCheckout\\Presentation\\Presenter\\Settings\\Front\\Modules\\PayPalModule']) ? $this->services['PsCheckout\\Presentation\\Presenter\\Settings\\Front\\Modules\\PayPalModule'] : $this->getPayPalModuleService()) && false ?: '_'}, 1 => ${($_ = isset($this->services['PsCheckout\\Presentation\\Presenter\\Settings\\Front\\Modules\\ConfigurationModule']) ? $this->services['PsCheckout\\Presentation\\Presenter\\Settings\\Front\\Modules\\ConfigurationModule'] : $this->getConfigurationModuleService()) && false ?: '_'}, 2 => ${($_ = isset($this->services['PsCheckout\\Presentation\\Presenter\\Settings\\Front\\Modules\\MediaModule']) ? $this->services['PsCheckout\\Presentation\\Presenter\\Settings\\Front\\Modules\\MediaModule'] : $this->getMediaModuleService()) && false ?: '_'}, 3 => ${($_ = isset($this->services['PsCheckout\\Presentation\\Presenter\\Settings\\Front\\Modules\\LinkModule']) ? $this->services['PsCheckout\\Presentation\\Presenter\\Settings\\Front\\Modules\\LinkModule'] : $this->getLinkModuleService()) && false ?: '_'}, 4 => ${($_ = isset($this->services['PsCheckout\\Presentation\\Presenter\\Settings\\Front\\Modules\\TranslationModule']) ? $this->services['PsCheckout\\Presentation\\Presenter\\Settings\\Front\\Modules\\TranslationModule'] : $this->getTranslationModuleService()) && false ?: '_'}]);
    }

    /**
     * Gets the public 'PsCheckout\Presentation\Presenter\Settings\Front\Modules\ConfigurationModule' shared service.
     *
     * @return \PsCheckout\Presentation\Presenter\Settings\Front\Modules\ConfigurationModule
     */
    protected function getConfigurationModuleService()
    {
        return $this->services['PsCheckout\\Presentation\\Presenter\\Settings\\Front\\Modules\\ConfigurationModule'] = new \PsCheckout\Presentation\Presenter\Settings\Front\Modules\ConfigurationModule(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->name, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Context']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] = new \PsCheckout\Infrastructure\Adapter\Context())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Configuration'] : $this->getConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\Settings\\Configuration\\PayPalConfiguration']) ? $this->services['PsCheckout\\Core\\Settings\\Configuration\\PayPalConfiguration'] : $this->getPayPalConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourcePresenter']) ? $this->services['PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourcePresenter'] : $this->getFundingSourcePresenterService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Core\\Settings\\Configuration\\PayPalSdkConfiguration']) ? $this->services['PsCheckout\\Core\\Settings\\Configuration\\PayPalSdkConfiguration'] : $this->getPayPalSdkConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Presentation\Presenter\Settings\Front\Modules\LinkModule' shared service.
     *
     * @return \PsCheckout\Presentation\Presenter\Settings\Front\Modules\LinkModule
     */
    protected function getLinkModuleService()
    {
        return $this->services['PsCheckout\\Presentation\\Presenter\\Settings\\Front\\Modules\\LinkModule'] = new \PsCheckout\Presentation\Presenter\Settings\Front\Modules\LinkModule(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->name, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Link']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Link'] : $this->getLinkService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Tools']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Tools'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Tools'] = new \PsCheckout\Infrastructure\Adapter\Tools())) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Presentation\Presenter\Settings\Front\Modules\MediaModule' shared service.
     *
     * @return \PsCheckout\Presentation\Presenter\Settings\Front\Modules\MediaModule
     */
    protected function getMediaModuleService()
    {
        return $this->services['PsCheckout\\Presentation\\Presenter\\Settings\\Front\\Modules\\MediaModule'] = new \PsCheckout\Presentation\Presenter\Settings\Front\Modules\MediaModule(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->name, ${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->getPathUri());
    }

    /**
     * Gets the public 'PsCheckout\Presentation\Presenter\Settings\Front\Modules\PayPalModule' shared service.
     *
     * @return \PsCheckout\Presentation\Presenter\Settings\Front\Modules\PayPalModule
     */
    protected function getPayPalModuleService()
    {
        return $this->services['PsCheckout\\Presentation\\Presenter\\Settings\\Front\\Modules\\PayPalModule'] = new \PsCheckout\Presentation\Presenter\Settings\Front\Modules\PayPalModule(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->name, ${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->version, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Context']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] = new \PsCheckout\Infrastructure\Adapter\Context())) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Environment\\Env']) ? $this->services['PsCheckout\\Infrastructure\\Environment\\Env'] : $this->getEnv3Service()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourcePresenter']) ? $this->services['PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourcePresenter'] : $this->getFundingSourcePresenterService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourceTokenPresenter']) ? $this->services['PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourceTokenPresenter'] : $this->getFundingSourceTokenPresenterService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Presentation\\Presenter\\Settings\\Front\\SupportedCardBrandsPresenter']) ? $this->services['PsCheckout\\Presentation\\Presenter\\Settings\\Front\\SupportedCardBrandsPresenter'] : $this->getSupportedCardBrandsPresenterService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository']) ? $this->services['PsCheckout\\Infrastructure\\Repository\\PayPalOrderRepository'] : $this->getPayPalOrderRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourceTranslationProvider']) ? $this->services['PsCheckout\\Presentation\\Presenter\\FundingSource\\FundingSourceTranslationProvider'] : $this->getFundingSourceTranslationProviderService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Presentation\Presenter\Settings\Front\Modules\TranslationModule' shared service.
     *
     * @return \PsCheckout\Presentation\Presenter\Settings\Front\Modules\TranslationModule
     */
    protected function getTranslationModuleService()
    {
        return $this->services['PsCheckout\\Presentation\\Presenter\\Settings\\Front\\Modules\\TranslationModule'] = new \PsCheckout\Presentation\Presenter\Settings\Front\Modules\TranslationModule(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->name, ${($_ = isset($this->services['PsCheckout\\Module\\Presentation\\Translator']) ? $this->services['PsCheckout\\Module\\Presentation\\Translator'] : $this->getTranslatorService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PsCheckout\Presentation\Presenter\Settings\Front\SupportedCardBrandsPresenter' shared service.
     *
     * @return \PsCheckout\Presentation\Presenter\Settings\Front\SupportedCardBrandsPresenter
     */
    protected function getSupportedCardBrandsPresenterService()
    {
        return $this->services['PsCheckout\\Presentation\\Presenter\\Settings\\Front\\SupportedCardBrandsPresenter'] = new \PsCheckout\Presentation\Presenter\Settings\Front\SupportedCardBrandsPresenter(${($_ = isset($this->services['PsCheckout\\Infrastructure\\Adapter\\Context']) ? $this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] : ($this->services['PsCheckout\\Infrastructure\\Adapter\\Context'] = new \PsCheckout\Infrastructure\Adapter\Context())) && false ?: '_'});
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
     * Gets the public 'container.env_var_processors_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getContainer_EnvVarProcessorsLocatorService()
    {
        return $this->services['container.env_var_processors_locator'] = new \Symfony\Component\DependencyInjection\ServiceLocator(['const' => function () {
            return ${($_ = isset($this->services['PrestaShopBundle\\DependencyInjection\\RuntimeConstEnvVarProcessor']) ? $this->services['PrestaShopBundle\\DependencyInjection\\RuntimeConstEnvVarProcessor'] : ($this->services['PrestaShopBundle\\DependencyInjection\\RuntimeConstEnvVarProcessor'] = new \PrestaShopBundle\DependencyInjection\RuntimeConstEnvVarProcessor())) && false ?: '_'};
        }]);
    }

    /**
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, $this->parameters['doctrine.connections'], $this->parameters['doctrine.entity_managers'], 'default', 'default');
    }

    /**
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = new \Doctrine\DBAL\Configuration();

        $b = new \Doctrine\DBAL\Logging\LoggerChain();
        $b->addLogger(new \Symfony\Bridge\Doctrine\Logger\DbalLogger(NULL, NULL));
        $b->addLogger(new \Doctrine\DBAL\Logging\DebugStack());

        $a->setSQLLogger($b);

        return $this->services['doctrine.dbal.default_connection'] = ${($_ = isset($this->services['doctrine.dbal.connection_factory']) ? $this->services['doctrine.dbal.connection_factory'] : ($this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory([]))) && false ?: '_'}->createConnection(['driver' => 'pdo_mysql', 'host' => 'db', 'port' => '', 'dbname' => 'prestashop', 'user' => 'root', 'password' => 'root', 'charset' => 'utf8mb4', 'driverOptions' => [1002 => 'SET sql_mode=(SELECT REPLACE(@@sql_mode,\'ONLY_FULL_GROUP_BY\',\'\'))', 1013 => $this->getEnv('const:runtime:_PS_ALLOW_MULTI_STATEMENTS_QUERIES_')], 'defaultTableOptions' => []], $a, new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this), ['enum' => 'string']);
    }

    /**
     * Gets the public 'doctrine.orm.default_entity_manager' shared service.
     *
     * @return \Doctrine\ORM\EntityManager
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService($lazyLoad = true)
    {
        $a = new \Doctrine\ORM\Configuration();

        $b = new \Doctrine\Persistence\Mapping\Driver\MappingDriverChain();

        $c = ${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : ($this->services['annotation_reader'] = new \Doctrine\Common\Annotations\AnnotationReader())) && false ?: '_'};
        $d = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($c, [0 => '/var/www/html/modules/productcomments/src/Entity']);
        $d->addExcludePaths([0 => '/var/www/html/modules/productcomments/src/Entity/index.php']);

        $b->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($c, [0 => '/var/www/html/src/PrestaShopBundle/Entity']), 'PrestaShop');
        $b->addDriver($d, 'PrestaShop\\Module\\ProductComment\\Entity');

        $a->setEntityNamespaces(['PrestaShopBundle\\Entity' => 'PrestaShop']);
        $a->setMetadataCacheImpl(${($_ = isset($this->services['doctrine.orm.cache.provider.cache.doctrine.orm.default.metadata']) ? $this->services['doctrine.orm.cache.provider.cache.doctrine.orm.default.metadata'] : $this->getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_MetadataService()) && false ?: '_'});
        $a->setQueryCacheImpl(${($_ = isset($this->services['doctrine.orm.cache.provider.cache.doctrine.orm.default.query']) ? $this->services['doctrine.orm.cache.provider.cache.doctrine.orm.default.query'] : $this->getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_QueryService()) && false ?: '_'});
        $a->setResultCacheImpl(${($_ = isset($this->services['doctrine.orm.cache.provider.cache.doctrine.orm.default.result']) ? $this->services['doctrine.orm.cache.provider.cache.doctrine.orm.default.result'] : $this->getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_ResultService()) && false ?: '_'});
        $a->setMetadataDriverImpl($b);
        $a->setProxyDir('/var/www/html/var/cache/dev//doctrine/orm/Proxies');
        $a->setProxyNamespace('Proxies');
        $a->setAutoGenerateProxyClasses(true);
        $a->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $a->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $a->setNamingStrategy(${($_ = isset($this->services['prestashop.database.naming_strategy']) ? $this->services['prestashop.database.naming_strategy'] : ($this->services['prestashop.database.naming_strategy'] = new \PrestaShopBundle\Service\Database\DoctrineNamingStrategy('ps_'))) && false ?: '_'});
        $a->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $a->setEntityListenerResolver(${($_ = isset($this->services['doctrine.orm.default_entity_listener_resolver']) ? $this->services['doctrine.orm.default_entity_listener_resolver'] : ($this->services['doctrine.orm.default_entity_listener_resolver'] = new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver($this))) && false ?: '_'});
        $a->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(new \Symfony\Component\DependencyInjection\ServiceLocator([])));
        $a->addCustomStringFunction('regexp', 'DoctrineExtensions\\Query\\Mysql\\Regexp');
        $a->addEntityNamespace('Moduleproductcomments', 'PrestaShop\\Module\\ProductComment\\Entity');

        $this->services['doctrine.orm.default_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create(${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->getDoctrine_Dbal_DefaultConnectionService()) && false ?: '_'}, $a);

        ${($_ = isset($this->services['doctrine.orm.default_manager_configurator']) ? $this->services['doctrine.orm.default_manager_configurator'] : ($this->services['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator([], []))) && false ?: '_'}->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'prestashop.adapter.context_state_manager' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\ContextStateManager
     */
    protected function getPrestashop_Adapter_ContextStateManagerService()
    {
        return $this->services['prestashop.adapter.context_state_manager'] = new \PrestaShop\PrestaShop\Adapter\ContextStateManager(${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->getPrestashop_Adapter_Legacy_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'prestashop.adapter.data_provider.country' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Country\CountryDataProvider
     */
    protected function getPrestashop_Adapter_DataProvider_CountryService()
    {
        return $this->services['prestashop.adapter.data_provider.country'] = new \PrestaShop\PrestaShop\Adapter\Country\CountryDataProvider();
    }

    /**
     * Gets the public 'prestashop.adapter.data_provider.currency' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Currency\CurrencyDataProvider
     */
    protected function getPrestashop_Adapter_DataProvider_CurrencyService()
    {
        return $this->services['prestashop.adapter.data_provider.currency'] = new \PrestaShop\PrestaShop\Adapter\Currency\CurrencyDataProvider(${($_ = isset($this->services['prestashop.adapter.legacy.configuration']) ? $this->services['prestashop.adapter.legacy.configuration'] : ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())) && false ?: '_'}, ((${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->getPrestashop_Adapter_Legacy_ContextService()) && false ?: '_'}->getContext()->shop) ? (${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->getPrestashop_Adapter_Legacy_ContextService()) && false ?: '_'}->getContext()->shop->id) : (null)));
    }

    /**
     * Gets the public 'prestashop.adapter.environment' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Environment
     */
    protected function getPrestashop_Adapter_EnvironmentService()
    {
        return $this->services['prestashop.adapter.environment'] = new \PrestaShop\PrestaShop\Adapter\Environment(true);
    }

    /**
     * Gets the public 'prestashop.adapter.legacy.configuration' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Configuration
     */
    protected function getPrestashop_Adapter_Legacy_ConfigurationService()
    {
        return $this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration();
    }

    /**
     * Gets the public 'prestashop.adapter.legacy.context' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\LegacyContext
     */
    protected function getPrestashop_Adapter_Legacy_ContextService()
    {
        return $this->services['prestashop.adapter.legacy.context'] = new \PrestaShop\PrestaShop\Adapter\LegacyContext('/mails/themes', ${($_ = isset($this->services['prestashop.adapter.tools']) ? $this->services['prestashop.adapter.tools'] : ($this->services['prestashop.adapter.tools'] = new \PrestaShop\PrestaShop\Adapter\Tools())) && false ?: '_'});
    }

    /**
     * Gets the public 'prestashop.adapter.tools' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Tools
     */
    protected function getPrestashop_Adapter_ToolsService()
    {
        return $this->services['prestashop.adapter.tools'] = new \PrestaShop\PrestaShop\Adapter\Tools();
    }

    /**
     * Gets the public 'prestashop.adapter.validate' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Validate
     */
    protected function getPrestashop_Adapter_ValidateService()
    {
        return $this->services['prestashop.adapter.validate'] = new \PrestaShop\PrestaShop\Adapter\Validate();
    }

    /**
     * Gets the public 'prestashop.core.circuit_breaker.advanced_factory' shared service.
     *
     * @return \PrestaShop\CircuitBreaker\AdvancedCircuitBreakerFactory
     */
    protected function getPrestashop_Core_CircuitBreaker_AdvancedFactoryService()
    {
        return $this->services['prestashop.core.circuit_breaker.advanced_factory'] = new \PrestaShop\CircuitBreaker\AdvancedCircuitBreakerFactory();
    }

    /**
     * Gets the public 'prestashop.core.circuit_breaker.doctrine_cache' shared service.
     *
     * @return \Doctrine\Common\Cache\FilesystemCache
     */
    protected function getPrestashop_Core_CircuitBreaker_DoctrineCacheService()
    {
        return $this->services['prestashop.core.circuit_breaker.doctrine_cache'] = new \Doctrine\Common\Cache\FilesystemCache((${($_ = isset($this->services['prestashop.adapter.environment']) ? $this->services['prestashop.adapter.environment'] : ($this->services['prestashop.adapter.environment'] = new \PrestaShop\PrestaShop\Adapter\Environment(true))) && false ?: '_'}->getCacheDir() . "/circuit_breaker"));
    }

    /**
     * Gets the public 'prestashop.core.circuit_breaker.guzzle.cache_storage' shared service.
     *
     * @return \GuzzleHttp\Subscriber\Cache\CacheStorage
     */
    protected function getPrestashop_Core_CircuitBreaker_Guzzle_CacheStorageService()
    {
        return $this->services['prestashop.core.circuit_breaker.guzzle.cache_storage'] = new \GuzzleHttp\Subscriber\Cache\CacheStorage(${($_ = isset($this->services['prestashop.core.circuit_breaker.doctrine_cache']) ? $this->services['prestashop.core.circuit_breaker.doctrine_cache'] : $this->getPrestashop_Core_CircuitBreaker_DoctrineCacheService()) && false ?: '_'}, 'circuit_breaker_', 86400);
    }

    /**
     * Gets the public 'prestashop.core.circuit_breaker.guzzle.cache_subscriber' shared service.
     *
     * @return \GuzzleHttp\Subscriber\Cache\CacheSubscriber
     */
    protected function getPrestashop_Core_CircuitBreaker_Guzzle_CacheSubscriberService()
    {
        return $this->services['prestashop.core.circuit_breaker.guzzle.cache_subscriber'] = ${($_ = isset($this->services['prestashop.core.circuit_breaker.guzzle.cache_subscriber_factory']) ? $this->services['prestashop.core.circuit_breaker.guzzle.cache_subscriber_factory'] : ($this->services['prestashop.core.circuit_breaker.guzzle.cache_subscriber_factory'] = new \PrestaShopBundle\Cache\Factory\CacheSubscriberFactory())) && false ?: '_'}->create(${($_ = isset($this->services['prestashop.core.circuit_breaker.guzzle.cache_storage']) ? $this->services['prestashop.core.circuit_breaker.guzzle.cache_storage'] : $this->getPrestashop_Core_CircuitBreaker_Guzzle_CacheStorageService()) && false ?: '_'});
    }

    /**
     * Gets the public 'prestashop.core.circuit_breaker.guzzle.cache_subscriber_factory' shared service.
     *
     * @return \PrestaShopBundle\Cache\Factory\CacheSubscriberFactory
     */
    protected function getPrestashop_Core_CircuitBreaker_Guzzle_CacheSubscriberFactoryService()
    {
        return $this->services['prestashop.core.circuit_breaker.guzzle.cache_subscriber_factory'] = new \PrestaShopBundle\Cache\Factory\CacheSubscriberFactory();
    }

    /**
     * Gets the public 'prestashop.core.circuit_breaker.storage' shared service.
     *
     * @return \PrestaShop\CircuitBreaker\Storage\DoctrineCache
     */
    protected function getPrestashop_Core_CircuitBreaker_StorageService()
    {
        return $this->services['prestashop.core.circuit_breaker.storage'] = new \PrestaShop\CircuitBreaker\Storage\DoctrineCache(${($_ = isset($this->services['prestashop.core.circuit_breaker.doctrine_cache']) ? $this->services['prestashop.core.circuit_breaker.doctrine_cache'] : $this->getPrestashop_Core_CircuitBreaker_DoctrineCacheService()) && false ?: '_'});
    }

    /**
     * Gets the public 'prestashop.core.localization.cache.adapter' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\ArrayAdapter
     */
    protected function getPrestashop_Core_Localization_Cache_AdapterService()
    {
        return $this->services['prestashop.core.localization.cache.adapter'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter();
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.cache.adapter' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    protected function getPrestashop_Core_Localization_Cldr_Cache_AdapterService()
    {
        return $this->services['prestashop.core.localization.cldr.cache.adapter'] = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('CLDR', 0, '/var/www/html/var/cache/dev//localization');
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.datalayer.locale_cache' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\CLDR\DataLayer\LocaleCache
     */
    protected function getPrestashop_Core_Localization_Cldr_Datalayer_LocaleCacheService()
    {
        $this->services['prestashop.core.localization.cldr.datalayer.locale_cache'] = $instance = new \PrestaShop\PrestaShop\Core\Localization\CLDR\DataLayer\LocaleCache(${($_ = isset($this->services['prestashop.core.localization.cldr.cache.adapter']) ? $this->services['prestashop.core.localization.cldr.cache.adapter'] : ($this->services['prestashop.core.localization.cldr.cache.adapter'] = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('CLDR', 0, '/var/www/html/var/cache/dev//localization'))) && false ?: '_'});

        $instance->setLowerLayer(${($_ = isset($this->services['prestashop.core.localization.cldr.datalayer.locale_reference']) ? $this->services['prestashop.core.localization.cldr.datalayer.locale_reference'] : $this->getPrestashop_Core_Localization_Cldr_Datalayer_LocaleReferenceService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.datalayer.locale_reference' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\CLDR\DataLayer\LocaleReference
     */
    protected function getPrestashop_Core_Localization_Cldr_Datalayer_LocaleReferenceService()
    {
        return $this->services['prestashop.core.localization.cldr.datalayer.locale_reference'] = new \PrestaShop\PrestaShop\Core\Localization\CLDR\DataLayer\LocaleReference(${($_ = isset($this->services['prestashop.core.localization.cldr.reader']) ? $this->services['prestashop.core.localization.cldr.reader'] : ($this->services['prestashop.core.localization.cldr.reader'] = new \PrestaShop\PrestaShop\Core\Localization\CLDR\Reader())) && false ?: '_'});
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.locale_data_source' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleDataSource
     */
    protected function getPrestashop_Core_Localization_Cldr_LocaleDataSourceService()
    {
        return $this->services['prestashop.core.localization.cldr.locale_data_source'] = new \PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleDataSource(${($_ = isset($this->services['prestashop.core.localization.cldr.datalayer.locale_cache']) ? $this->services['prestashop.core.localization.cldr.datalayer.locale_cache'] : $this->getPrestashop_Core_Localization_Cldr_Datalayer_LocaleCacheService()) && false ?: '_'});
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.locale_repository' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleRepository
     */
    protected function getPrestashop_Core_Localization_Cldr_LocaleRepositoryService()
    {
        return $this->services['prestashop.core.localization.cldr.locale_repository'] = new \PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleRepository(${($_ = isset($this->services['prestashop.core.localization.cldr.locale_data_source']) ? $this->services['prestashop.core.localization.cldr.locale_data_source'] : $this->getPrestashop_Core_Localization_Cldr_LocaleDataSourceService()) && false ?: '_'});
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.reader' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\CLDR\Reader
     */
    protected function getPrestashop_Core_Localization_Cldr_ReaderService()
    {
        return $this->services['prestashop.core.localization.cldr.reader'] = new \PrestaShop\PrestaShop\Core\Localization\CLDR\Reader();
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.datasource' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\CurrencyDataSource
     */
    protected function getPrestashop_Core_Localization_Currency_DatasourceService()
    {
        return $this->services['prestashop.core.localization.currency.datasource'] = new \PrestaShop\PrestaShop\Core\Localization\Currency\CurrencyDataSource(${($_ = isset($this->services['prestashop.core.localization.currency.middleware.cache']) ? $this->services['prestashop.core.localization.currency.middleware.cache'] : $this->getPrestashop_Core_Localization_Currency_Middleware_CacheService()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.localization.currency.middleware.installed']) ? $this->services['prestashop.core.localization.currency.middleware.installed'] : $this->getPrestashop_Core_Localization_Currency_Middleware_InstalledService()) && false ?: '_'});
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.middleware.cache' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyCache
     */
    protected function getPrestashop_Core_Localization_Currency_Middleware_CacheService()
    {
        $this->services['prestashop.core.localization.currency.middleware.cache'] = $instance = new \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyCache(${($_ = isset($this->services['prestashop.core.localization.cache.adapter']) ? $this->services['prestashop.core.localization.cache.adapter'] : ($this->services['prestashop.core.localization.cache.adapter'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter())) && false ?: '_'});

        $instance->setLowerLayer(${($_ = isset($this->services['prestashop.core.localization.currency.middleware.database']) ? $this->services['prestashop.core.localization.currency.middleware.database'] : $this->getPrestashop_Core_Localization_Currency_Middleware_DatabaseService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.middleware.database' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyDatabase
     */
    protected function getPrestashop_Core_Localization_Currency_Middleware_DatabaseService()
    {
        $this->services['prestashop.core.localization.currency.middleware.database'] = $instance = new \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyDatabase(${($_ = isset($this->services['prestashop.adapter.data_provider.currency']) ? $this->services['prestashop.adapter.data_provider.currency'] : $this->getPrestashop_Adapter_DataProvider_CurrencyService()) && false ?: '_'});

        $instance->setLowerLayer(${($_ = isset($this->services['prestashop.core.localization.currency.middleware.reference']) ? $this->services['prestashop.core.localization.currency.middleware.reference'] : $this->getPrestashop_Core_Localization_Currency_Middleware_ReferenceService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.middleware.installed' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyInstalled
     */
    protected function getPrestashop_Core_Localization_Currency_Middleware_InstalledService()
    {
        return $this->services['prestashop.core.localization.currency.middleware.installed'] = new \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyInstalled(${($_ = isset($this->services['prestashop.adapter.data_provider.currency']) ? $this->services['prestashop.adapter.data_provider.currency'] : $this->getPrestashop_Adapter_DataProvider_CurrencyService()) && false ?: '_'});
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.middleware.reference' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyReference
     */
    protected function getPrestashop_Core_Localization_Currency_Middleware_ReferenceService()
    {
        return $this->services['prestashop.core.localization.currency.middleware.reference'] = new \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyReference(${($_ = isset($this->services['prestashop.core.localization.cldr.locale_repository']) ? $this->services['prestashop.core.localization.cldr.locale_repository'] : $this->getPrestashop_Core_Localization_Cldr_LocaleRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.repository' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\Repository
     */
    protected function getPrestashop_Core_Localization_Currency_RepositoryService()
    {
        return $this->services['prestashop.core.localization.currency.repository'] = new \PrestaShop\PrestaShop\Core\Localization\Currency\Repository(${($_ = isset($this->services['prestashop.core.localization.currency.datasource']) ? $this->services['prestashop.core.localization.currency.datasource'] : $this->getPrestashop_Core_Localization_Currency_DatasourceService()) && false ?: '_'});
    }

    /**
     * Gets the public 'prestashop.core.localization.locale.context_locale' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Locale
     */
    protected function getPrestashop_Core_Localization_Locale_ContextLocaleService()
    {
        return $this->services['prestashop.core.localization.locale.context_locale'] = ${($_ = isset($this->services['prestashop.core.localization.locale.repository']) ? $this->services['prestashop.core.localization.locale.repository'] : $this->getPrestashop_Core_Localization_Locale_RepositoryService()) && false ?: '_'}->getLocale(${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->getPrestashop_Adapter_Legacy_ContextService()) && false ?: '_'}->getContext()->language->getLocale());
    }

    /**
     * Gets the public 'prestashop.core.localization.locale.repository' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Locale\Repository
     */
    protected function getPrestashop_Core_Localization_Locale_RepositoryService()
    {
        return $this->services['prestashop.core.localization.locale.repository'] = new \PrestaShop\PrestaShop\Core\Localization\Locale\Repository(${($_ = isset($this->services['prestashop.core.localization.cldr.locale_repository']) ? $this->services['prestashop.core.localization.cldr.locale_repository'] : $this->getPrestashop_Core_Localization_Cldr_LocaleRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.localization.currency.repository']) ? $this->services['prestashop.core.localization.currency.repository'] : $this->getPrestashop_Core_Localization_Currency_RepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'prestashop.core.string.character_cleaner' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\String\CharacterCleaner
     */
    protected function getPrestashop_Core_String_CharacterCleanerService()
    {
        return $this->services['prestashop.core.string.character_cleaner'] = new \PrestaShop\PrestaShop\Core\String\CharacterCleaner();
    }

    /**
     * Gets the public 'product_comment_criterion_repository' shared service.
     *
     * @return \PrestaShop\Module\ProductComment\Repository\ProductCommentCriterionRepository
     */
    protected function getProductCommentCriterionRepositoryService()
    {
        return $this->services['product_comment_criterion_repository'] = new \PrestaShop\Module\ProductComment\Repository\ProductCommentCriterionRepository(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'}, ${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->getDoctrine_Dbal_DefaultConnectionService()) && false ?: '_'}, 'ps_');
    }

    /**
     * Gets the public 'product_comment_repository' shared service.
     *
     * @return \PrestaShop\Module\ProductComment\Repository\ProductCommentRepository
     */
    protected function getProductCommentRepositoryService()
    {
        return $this->services['product_comment_repository'] = new \PrestaShop\Module\ProductComment\Repository\ProductCommentRepository(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'}, ${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->getDoctrine_Dbal_DefaultConnectionService()) && false ?: '_'}, 'ps_', ${($_ = isset($this->services['prestashop.adapter.legacy.configuration']) ? $this->services['prestashop.adapter.legacy.configuration'] : ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())) && false ?: '_'}->get("PRODUCT_COMMENTS_ALLOW_GUESTS"), ${($_ = isset($this->services['prestashop.adapter.legacy.configuration']) ? $this->services['prestashop.adapter.legacy.configuration'] : ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())) && false ?: '_'}->get("PRODUCT_COMMENTS_MINIMAL_TIME"));
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

    /**
     * Gets the public 'ps_facebook' shared service.
     *
     * @return \Ps_facebook
     */
    protected function getPsFacebookService()
    {
        return $this->services['ps_facebook'] = \Module::getInstanceByName('ps_facebook');
    }

    /**
     * Gets the public 'ps_facebook.billing_env' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Factory\ParametersFactory
     */
    protected function getPsFacebook_BillingEnvService()
    {
        return $this->services['ps_facebook.billing_env'] = \PrestaShop\Module\PrestashopFacebook\Factory\ParametersFactory::getBillingEnv();
    }

    /**
     * Gets the public 'ps_facebook.cache' shared service.
     *
     * @return \string
     */
    protected function getPsFacebook_CacheService()
    {
        return $this->services['ps_facebook.cache'] = \PrestaShop\Module\PrestashopFacebook\Factory\CacheFactory::getCachePath();
    }

    /**
     * Gets the public 'ps_facebook.context' shared service.
     *
     * @return \Context
     */
    protected function getPsFacebook_ContextService()
    {
        return $this->services['ps_facebook.context'] = \PrestaShop\Module\PrestashopFacebook\Factory\ContextFactory::getContext();
    }

    /**
     * Gets the public 'ps_facebook.controller' shared service.
     *
     * @return \Controller
     */
    protected function getPsFacebook_ControllerService()
    {
        return $this->services['ps_facebook.controller'] = \PrestaShop\Module\PrestashopFacebook\Factory\ContextFactory::getController();
    }

    /**
     * Gets the public 'ps_facebook.cookie' shared service.
     *
     * @return \Cookie
     */
    protected function getPsFacebook_CookieService()
    {
        return $this->services['ps_facebook.cookie'] = \PrestaShop\Module\PrestashopFacebook\Factory\ContextFactory::getCookie();
    }

    /**
     * Gets the public 'ps_facebook.currency' shared service.
     *
     * @return \Currency
     */
    protected function getPsFacebook_CurrencyService()
    {
        return $this->services['ps_facebook.currency'] = \PrestaShop\Module\PrestashopFacebook\Factory\ContextFactory::getCurrency();
    }

    /**
     * Gets the public 'ps_facebook.language' shared service.
     *
     * @return \Language
     */
    protected function getPsFacebook_LanguageService()
    {
        return $this->services['ps_facebook.language'] = \PrestaShop\Module\PrestashopFacebook\Factory\ContextFactory::getLanguage();
    }

    /**
     * Gets the public 'ps_facebook.link' shared service.
     *
     * @return \Shop
     */
    protected function getPsFacebook_LinkService()
    {
        return $this->services['ps_facebook.link'] = \PrestaShop\Module\PrestashopFacebook\Factory\ContextFactory::getLink();
    }

    /**
     * Gets the public 'ps_facebook.shop' shared service.
     *
     * @return \Shop
     */
    protected function getPsFacebook_ShopService()
    {
        return $this->services['ps_facebook.shop'] = \PrestaShop\Module\PrestashopFacebook\Factory\ContextFactory::getShop();
    }

    /**
     * Gets the public 'ps_facebook.smarty' shared service.
     *
     * @return \Smarty
     */
    protected function getPsFacebook_SmartyService()
    {
        return $this->services['ps_facebook.smarty'] = \PrestaShop\Module\PrestashopFacebook\Factory\ContextFactory::getSmarty();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle' shared service.
     *
     * @return \PsxMarketingWithGoogle
     */
    protected function getPsxmarketingwithgoogleService()
    {
        return $this->services['psxmarketingwithgoogle'] = \Module::getInstanceByName('psxmarketingwithgoogle');
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.billing_env' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ParametersFactory
     */
    protected function getPsxmarketingwithgoogle_BillingEnvService()
    {
        return $this->services['psxmarketingwithgoogle.billing_env'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ParametersFactory::getBillingEnv();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.cart' shared service.
     *
     * @return \Currency
     */
    protected function getPsxmarketingwithgoogle_CartService()
    {
        return $this->services['psxmarketingwithgoogle.cart'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getCart();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.context' shared service.
     *
     * @return \Context
     */
    protected function getPsxmarketingwithgoogle_ContextService()
    {
        return $this->services['psxmarketingwithgoogle.context'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getContext();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.controller' shared service.
     *
     * @return \Controller
     */
    protected function getPsxmarketingwithgoogle_ControllerService()
    {
        return $this->services['psxmarketingwithgoogle.controller'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getController();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.cookie' shared service.
     *
     * @return \Cookie
     */
    protected function getPsxmarketingwithgoogle_CookieService()
    {
        return $this->services['psxmarketingwithgoogle.cookie'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getCookie();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.country' shared service.
     *
     * @return \Country
     */
    protected function getPsxmarketingwithgoogle_CountryService()
    {
        return $this->services['psxmarketingwithgoogle.country'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getCountry();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.currency' shared service.
     *
     * @return \Currency
     */
    protected function getPsxmarketingwithgoogle_CurrencyService()
    {
        return $this->services['psxmarketingwithgoogle.currency'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getCurrency();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.customer' shared service.
     *
     * @return \Currency
     */
    protected function getPsxmarketingwithgoogle_CustomerService()
    {
        return $this->services['psxmarketingwithgoogle.customer'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getCustomer();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.db' shared service.
     *
     * @return \Db
     */
    protected function getPsxmarketingwithgoogle_DbService()
    {
        return $this->services['psxmarketingwithgoogle.db'] = \Db::getInstance();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.language' shared service.
     *
     * @return \Language
     */
    protected function getPsxmarketingwithgoogle_LanguageService()
    {
        return $this->services['psxmarketingwithgoogle.language'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getLanguage();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.link' shared service.
     *
     * @return \Shop
     */
    protected function getPsxmarketingwithgoogle_LinkService()
    {
        return $this->services['psxmarketingwithgoogle.link'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getLink();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.shop' shared service.
     *
     * @return \Shop
     */
    protected function getPsxmarketingwithgoogle_ShopService()
    {
        return $this->services['psxmarketingwithgoogle.shop'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getShop();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.smarty' shared service.
     *
     * @return \Smarty
     */
    protected function getPsxmarketingwithgoogle_SmartyService()
    {
        return $this->services['psxmarketingwithgoogle.smarty'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getSmarty();
    }

    /**
     * Gets the private 'PrestaShopBundle\DependencyInjection\RuntimeConstEnvVarProcessor' shared service.
     *
     * @return \PrestaShopBundle\DependencyInjection\RuntimeConstEnvVarProcessor
     */
    protected function getRuntimeConstEnvVarProcessorService()
    {
        return $this->services['PrestaShopBundle\\DependencyInjection\\RuntimeConstEnvVarProcessor'] = new \PrestaShopBundle\DependencyInjection\RuntimeConstEnvVarProcessor();
    }

    /**
     * Gets the private 'PrestaShopCorp\Billing\Wrappers\BillingContextWrapper' shared service.
     *
     * @return \PrestaShopCorp\Billing\Wrappers\BillingContextWrapper
     */
    protected function getBillingContextWrapperService()
    {
        return $this->services['PrestaShopCorp\\Billing\\Wrappers\\BillingContextWrapper'] = new \PrestaShopCorp\Billing\Wrappers\BillingContextWrapper(${($_ = isset($this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts']) ? $this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts'] : $this->getPsAccountsService()) && false ?: '_'}, ${($_ = isset($this->services['ps_facebook.context']) ? $this->services['ps_facebook.context'] : $this->getPsFacebook_ContextService()) && false ?: '_'}, ${($_ = isset($this->services['ps_facebook.billing_env']) ? $this->services['ps_facebook.billing_env'] : $this->getPsFacebook_BillingEnvService()) && false ?: '_'});
    }

    /**
     * Gets the private 'annotation_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\AnnotationReader();
    }

    /**
     * Gets the private 'cache.doctrine.orm.default.metadata' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\ArrayAdapter
     */
    protected function getCache_Doctrine_Orm_Default_MetadataService()
    {
        return $this->services['cache.doctrine.orm.default.metadata'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter();
    }

    /**
     * Gets the private 'cache.doctrine.orm.default.query' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\ArrayAdapter
     */
    protected function getCache_Doctrine_Orm_Default_QueryService()
    {
        return $this->services['cache.doctrine.orm.default.query'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter();
    }

    /**
     * Gets the private 'cache.doctrine.orm.default.result' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\ArrayAdapter
     */
    protected function getCache_Doctrine_Orm_Default_ResultService()
    {
        return $this->services['cache.doctrine.orm.default.result'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter();
    }

    /**
     * Gets the private 'configuration' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Configuration
     */
    protected function getConfiguration2Service()
    {
        return $this->services['configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration();
    }

    /**
     * Gets the private 'context' shared service.
     *
     * @return \Context
     */
    protected function getContext2Service()
    {
        return $this->services['context'] = \Context::getContext();
    }

    /**
     * Gets the private 'db' shared service.
     *
     * @return \Db
     */
    protected function getDbService()
    {
        return $this->services['db'] = \Db::getInstance();
    }

    /**
     * Gets the private 'doctrine.cache_clear_metadata_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearMetadataCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearMetadataCommandService()
    {
        return $this->services['doctrine.cache_clear_metadata_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearMetadataCacheDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.cache_clear_query_cache_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearQueryCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearQueryCacheCommandService()
    {
        return $this->services['doctrine.cache_clear_query_cache_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearQueryCacheDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.cache_clear_result_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearResultCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearResultCommandService()
    {
        return $this->services['doctrine.cache_clear_result_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearResultCacheDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.cache_collection_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CollectionRegionDoctrineCommand
     */
    protected function getDoctrine_CacheCollectionRegionCommandService()
    {
        return $this->services['doctrine.cache_collection_region_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CollectionRegionDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.clear_entity_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EntityRegionCacheDoctrineCommand
     */
    protected function getDoctrine_ClearEntityRegionCommandService()
    {
        return $this->services['doctrine.clear_entity_region_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EntityRegionCacheDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.clear_query_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\QueryRegionCacheDoctrineCommand
     */
    protected function getDoctrine_ClearQueryRegionCommandService()
    {
        return $this->services['doctrine.clear_query_region_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\QueryRegionCacheDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.database_create_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand
     */
    protected function getDoctrine_DatabaseCreateCommandService()
    {
        return $this->services['doctrine.database_create_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
    }

    /**
     * Gets the private 'doctrine.database_drop_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\DropDatabaseDoctrineCommand
     */
    protected function getDoctrine_DatabaseDropCommandService()
    {
        return $this->services['doctrine.database_drop_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\DropDatabaseDoctrineCommand(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
    }

    /**
     * Gets the private 'doctrine.database_import_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ImportDoctrineCommand
     */
    protected function getDoctrine_DatabaseImportCommandService()
    {
        return $this->services['doctrine.database_import_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ImportDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.dbal.connection_factory' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ConnectionFactory
     */
    protected function getDoctrine_Dbal_ConnectionFactoryService()
    {
        return $this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory([]);
    }

    /**
     * Gets the private 'doctrine.ensure_production_settings_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EnsureProductionSettingsDoctrineCommand
     */
    protected function getDoctrine_EnsureProductionSettingsCommandService()
    {
        return $this->services['doctrine.ensure_production_settings_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EnsureProductionSettingsDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.generate_entities_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\GenerateEntitiesDoctrineCommand
     */
    protected function getDoctrine_GenerateEntitiesCommandService()
    {
        return $this->services['doctrine.generate_entities_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\GenerateEntitiesDoctrineCommand(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
    }

    /**
     * Gets the private 'doctrine.mapping_convert_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ConvertMappingDoctrineCommand
     */
    protected function getDoctrine_MappingConvertCommandService()
    {
        return $this->services['doctrine.mapping_convert_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ConvertMappingDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.mapping_import_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\ImportMappingDoctrineCommand
     */
    protected function getDoctrine_MappingImportCommandService()
    {
        return $this->services['doctrine.mapping_import_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\ImportMappingDoctrineCommand(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'}, []);
    }

    /**
     * Gets the private 'doctrine.mapping_info_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\InfoDoctrineCommand
     */
    protected function getDoctrine_MappingInfoCommandService()
    {
        return $this->services['doctrine.mapping_info_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\InfoDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.orm.cache.provider.cache.doctrine.orm.default.metadata' shared service.
     *
     * @return \Symfony\Component\Cache\DoctrineProvider
     */
    protected function getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_MetadataService()
    {
        return $this->services['doctrine.orm.cache.provider.cache.doctrine.orm.default.metadata'] = new \Symfony\Component\Cache\DoctrineProvider(${($_ = isset($this->services['cache.doctrine.orm.default.metadata']) ? $this->services['cache.doctrine.orm.default.metadata'] : ($this->services['cache.doctrine.orm.default.metadata'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter())) && false ?: '_'});
    }

    /**
     * Gets the private 'doctrine.orm.cache.provider.cache.doctrine.orm.default.query' shared service.
     *
     * @return \Symfony\Component\Cache\DoctrineProvider
     */
    protected function getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_QueryService()
    {
        return $this->services['doctrine.orm.cache.provider.cache.doctrine.orm.default.query'] = new \Symfony\Component\Cache\DoctrineProvider(${($_ = isset($this->services['cache.doctrine.orm.default.query']) ? $this->services['cache.doctrine.orm.default.query'] : ($this->services['cache.doctrine.orm.default.query'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter())) && false ?: '_'});
    }

    /**
     * Gets the private 'doctrine.orm.cache.provider.cache.doctrine.orm.default.result' shared service.
     *
     * @return \Symfony\Component\Cache\DoctrineProvider
     */
    protected function getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_ResultService()
    {
        return $this->services['doctrine.orm.cache.provider.cache.doctrine.orm.default.result'] = new \Symfony\Component\Cache\DoctrineProvider(${($_ = isset($this->services['cache.doctrine.orm.default.result']) ? $this->services['cache.doctrine.orm.default.result'] : ($this->services['cache.doctrine.orm.default.result'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter())) && false ?: '_'});
    }

    /**
     * Gets the private 'doctrine.orm.default_entity_listener_resolver' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver
     */
    protected function getDoctrine_Orm_DefaultEntityListenerResolverService()
    {
        return $this->services['doctrine.orm.default_entity_listener_resolver'] = new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver($this);
    }

    /**
     * Gets the private 'doctrine.orm.default_entity_manager.property_info_extractor' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor
     */
    protected function getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService()
    {
        return $this->services['doctrine.orm.default_entity_manager.property_info_extractor'] = new \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'}->getMetadataFactory());
    }

    /**
     * Gets the private 'doctrine.orm.default_listeners.attach_entity_listeners' shared service.
     *
     * @return \Doctrine\ORM\Tools\AttachEntityListenersListener
     */
    protected function getDoctrine_Orm_DefaultListeners_AttachEntityListenersService()
    {
        return $this->services['doctrine.orm.default_listeners.attach_entity_listeners'] = new \Doctrine\ORM\Tools\AttachEntityListenersListener();
    }

    /**
     * Gets the private 'doctrine.orm.default_manager_configurator' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator
     */
    protected function getDoctrine_Orm_DefaultManagerConfiguratorService()
    {
        return $this->services['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator([], []);
    }

    /**
     * Gets the private 'doctrine.orm.validator.unique' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator
     */
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        return $this->services['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
    }

    /**
     * Gets the private 'doctrine.orm.validator_initializer' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer
     */
    protected function getDoctrine_Orm_ValidatorInitializerService()
    {
        return $this->services['doctrine.orm.validator_initializer'] = new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
    }

    /**
     * Gets the private 'doctrine.query_dql_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunDqlDoctrineCommand
     */
    protected function getDoctrine_QueryDqlCommandService()
    {
        return $this->services['doctrine.query_dql_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunDqlDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.query_sql_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunSqlDoctrineCommand
     */
    protected function getDoctrine_QuerySqlCommandService()
    {
        return $this->services['doctrine.query_sql_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunSqlDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.schema_create_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CreateSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaCreateCommandService()
    {
        return $this->services['doctrine.schema_create_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CreateSchemaDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.schema_drop_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\DropSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaDropCommandService()
    {
        return $this->services['doctrine.schema_drop_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\DropSchemaDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.schema_update_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\UpdateSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaUpdateCommandService()
    {
        return $this->services['doctrine.schema_update_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\UpdateSchemaDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.schema_validate_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ValidateSchemaCommand
     */
    protected function getDoctrine_SchemaValidateCommandService()
    {
        return $this->services['doctrine.schema_validate_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ValidateSchemaCommand();
    }

    /**
     * Gets the private 'doctrine_cache.contains_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineCacheBundle\Command\ContainsCommand
     */
    protected function getDoctrineCache_ContainsCommandService()
    {
        return $this->services['doctrine_cache.contains_command'] = new \Doctrine\Bundle\DoctrineCacheBundle\Command\ContainsCommand();
    }

    /**
     * Gets the private 'doctrine_cache.delete_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineCacheBundle\Command\DeleteCommand
     */
    protected function getDoctrineCache_DeleteCommandService()
    {
        return $this->services['doctrine_cache.delete_command'] = new \Doctrine\Bundle\DoctrineCacheBundle\Command\DeleteCommand();
    }

    /**
     * Gets the private 'doctrine_cache.flush_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineCacheBundle\Command\FlushCommand
     */
    protected function getDoctrineCache_FlushCommandService()
    {
        return $this->services['doctrine_cache.flush_command'] = new \Doctrine\Bundle\DoctrineCacheBundle\Command\FlushCommand();
    }

    /**
     * Gets the private 'doctrine_cache.stats_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineCacheBundle\Command\StatsCommand
     */
    protected function getDoctrineCache_StatsCommandService()
    {
        return $this->services['doctrine_cache.stats_command'] = new \Doctrine\Bundle\DoctrineCacheBundle\Command\StatsCommand();
    }

    /**
     * Gets the private 'form.type.entity' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\Type\EntityType
     */
    protected function getForm_Type_EntityService()
    {
        return $this->services['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
    }

    /**
     * Gets the private 'form.type_guesser.doctrine' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser
     */
    protected function getForm_TypeGuesser_DoctrineService()
    {
        return $this->services['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
    }

    /**
     * Gets the private 'hashing' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Crypto\Hashing
     */
    protected function getHashingService()
    {
        return $this->services['hashing'] = new \PrestaShop\PrestaShop\Core\Crypto\Hashing();
    }

    /**
     * Gets the private 'prestashop.adapter.module.repository.module_repository' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Module\Repository\ModuleRepository
     */
    protected function getPrestashop_Adapter_Module_Repository_ModuleRepositoryService()
    {
        return $this->services['prestashop.adapter.module.repository.module_repository'] = new \PrestaShop\PrestaShop\Adapter\Module\Repository\ModuleRepository();
    }

    /**
     * Gets the private 'prestashop.core.filter.front_end_object.cart' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\CartFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_CartService()
    {
        return $this->services['prestashop.core.filter.front_end_object.cart'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\CartFilter(${($_ = isset($this->services['prestashop.core.filter.front_end_object.product_collection']) ? $this->services['prestashop.core.filter.front_end_object.product_collection'] : $this->getPrestashop_Core_Filter_FrontEndObject_ProductCollectionService()) && false ?: '_'});
    }

    /**
     * Gets the private 'prestashop.core.filter.front_end_object.configuration' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ConfigurationFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_ConfigurationService()
    {
        return $this->services['prestashop.core.filter.front_end_object.configuration'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ConfigurationFilter();
    }

    /**
     * Gets the private 'prestashop.core.filter.front_end_object.customer' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\CustomerFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_CustomerService()
    {
        return $this->services['prestashop.core.filter.front_end_object.customer'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\CustomerFilter();
    }

    /**
     * Gets the private 'prestashop.core.filter.front_end_object.main' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\MainFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_MainService()
    {
        return $this->services['prestashop.core.filter.front_end_object.main'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\MainFilter(['cart' => ${($_ = isset($this->services['prestashop.core.filter.front_end_object.cart']) ? $this->services['prestashop.core.filter.front_end_object.cart'] : $this->getPrestashop_Core_Filter_FrontEndObject_CartService()) && false ?: '_'}, 'customer' => ${($_ = isset($this->services['prestashop.core.filter.front_end_object.customer']) ? $this->services['prestashop.core.filter.front_end_object.customer'] : ($this->services['prestashop.core.filter.front_end_object.customer'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\CustomerFilter())) && false ?: '_'}, 'shop' => ${($_ = isset($this->services['prestashop.core.filter.front_end_object.shop']) ? $this->services['prestashop.core.filter.front_end_object.shop'] : ($this->services['prestashop.core.filter.front_end_object.shop'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ShopFilter())) && false ?: '_'}, 'configuration' => ${($_ = isset($this->services['prestashop.core.filter.front_end_object.configuration']) ? $this->services['prestashop.core.filter.front_end_object.configuration'] : ($this->services['prestashop.core.filter.front_end_object.configuration'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ConfigurationFilter())) && false ?: '_'}]);
    }

    /**
     * Gets the private 'prestashop.core.filter.front_end_object.product' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ProductFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_ProductService()
    {
        return $this->services['prestashop.core.filter.front_end_object.product'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ProductFilter();
    }

    /**
     * Gets the private 'prestashop.core.filter.front_end_object.product_collection' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\CollectionFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_ProductCollectionService()
    {
        $this->services['prestashop.core.filter.front_end_object.product_collection'] = $instance = new \PrestaShop\PrestaShop\Core\Filter\CollectionFilter();

        $instance->queue([0 => ${($_ = isset($this->services['prestashop.core.filter.front_end_object.product']) ? $this->services['prestashop.core.filter.front_end_object.product'] : ($this->services['prestashop.core.filter.front_end_object.product'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ProductFilter())) && false ?: '_'}]);

        return $instance;
    }

    /**
     * Gets the private 'prestashop.core.filter.front_end_object.search_result_product' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\SearchResultProductFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_SearchResultProductService()
    {
        return $this->services['prestashop.core.filter.front_end_object.search_result_product'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\SearchResultProductFilter();
    }

    /**
     * Gets the private 'prestashop.core.filter.front_end_object.search_result_product_collection' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\CollectionFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_SearchResultProductCollectionService()
    {
        $this->services['prestashop.core.filter.front_end_object.search_result_product_collection'] = $instance = new \PrestaShop\PrestaShop\Core\Filter\CollectionFilter();

        $instance->queue([0 => ${($_ = isset($this->services['prestashop.core.filter.front_end_object.search_result_product']) ? $this->services['prestashop.core.filter.front_end_object.search_result_product'] : ($this->services['prestashop.core.filter.front_end_object.search_result_product'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\SearchResultProductFilter())) && false ?: '_'}]);

        return $instance;
    }

    /**
     * Gets the private 'prestashop.core.filter.front_end_object.shop' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ShopFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_ShopService()
    {
        return $this->services['prestashop.core.filter.front_end_object.shop'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ShopFilter();
    }

    /**
     * Gets the private 'prestashop.database.naming_strategy' shared service.
     *
     * @return \PrestaShopBundle\Service\Database\DoctrineNamingStrategy
     */
    protected function getPrestashop_Database_NamingStrategyService()
    {
        return $this->services['prestashop.database.naming_strategy'] = new \PrestaShopBundle\Service\Database\DoctrineNamingStrategy('ps_');
    }

    /**
     * Gets the private 'prestashop.translation.translator_language_loader' shared service.
     *
     * @return \PrestaShopBundle\Translation\TranslatorLanguageLoader
     */
    protected function getPrestashop_Translation_TranslatorLanguageLoaderService()
    {
        return $this->services['prestashop.translation.translator_language_loader'] = new \PrestaShopBundle\Translation\TranslatorLanguageLoader(${($_ = isset($this->services['prestashop.adapter.module.repository.module_repository']) ? $this->services['prestashop.adapter.module.repository.module_repository'] : ($this->services['prestashop.adapter.module.repository.module_repository'] = new \PrestaShop\PrestaShop\Adapter\Module\Repository\ModuleRepository())) && false ?: '_'});
    }

    public function getParameter($name)
    {
        $name = (string) $name;
        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            $name = $this->normalizeParameterName($name);

            if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
                throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
            }
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name)
    {
        $name = (string) $name;
        $name = $this->normalizeParameterName($name);

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = [];
    private $dynamicParameters = [];

    /**
     * Computes a dynamic parameter.
     *
     * @param string $name The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter($name)
    {
        throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
    }

    private $normalizedParameterNames = [];

    private function normalizeParameterName($name)
    {
        if (isset($this->normalizedParameterNames[$normalizedName = strtolower($name)]) || isset($this->parameters[$normalizedName]) || array_key_exists($normalizedName, $this->parameters)) {
            $normalizedName = isset($this->normalizedParameterNames[$normalizedName]) ? $this->normalizedParameterNames[$normalizedName] : $normalizedName;
            if ((string) $name !== $normalizedName) {
                @trigger_error(sprintf('Parameter names will be made case sensitive in Symfony 4.0. Using "%s" instead of "%s" is deprecated since Symfony 3.4.', $name, $normalizedName), E_USER_DEPRECATED);
            }
        } else {
            $normalizedName = $this->normalizedParameterNames[$normalizedName] = (string) $name;
        }

        return $normalizedName;
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return [
            'database_host' => 'db',
            'database_port' => '',
            'database_name' => 'prestashop',
            'database_user' => 'root',
            'database_password' => 'root',
            'database_prefix' => 'ps_',
            'database_engine' => 'InnoDB',
            'mailer_transport' => 'smtp',
            'mailer_host' => '127.0.0.1',
            'mailer_user' => NULL,
            'mailer_password' => NULL,
            'secret' => 'CIzx7U8U5KM3Ek8gQqqsvOmW50r9BBazPWHDyYiGYsjFVANYZhVnCMBYHrzwqVQp',
            'ps_caching' => 'CacheMemcache',
            'ps_cache_enable' => false,
            'ps_creation_date' => '2025-10-22',
            'locale' => 'pl-PL',
            'use_debug_toolbar' => true,
            'cookie_key' => 'u1VMGqCHoykfnyE7yOX2jXfuaC5jCn8Y3wCgqP72kQ7UrUNEyE6uD0JdORZ8VYEH',
            'cookie_iv' => 'OAuwbwvgyYC9HimTgRJNGqUfLQIS15v0',
            'new_cookie_key' => 'def000009b8fc1dd13ffb8e745dc6d19ee39ded9110d40c90b1b73392bf560579503855626362e313d86f0e7d2c482f57a64887b0093db719450ba9e6a89785e94f50af6',
            'cache.driver' => 'array',
            'kernel.bundles' => [

            ],
            'kernel.root_dir' => '/var/www/html/app',
            'kernel.project_dir' => '/var/www/html',
            'kernel.name' => 'app',
            'kernel.debug' => true,
            'kernel.environment' => 'dev',
            'kernel.cache_dir' => '/var/www/html/var/cache/dev/',
            'kernel.active_modules' => [
                0 => 'blockwishlist',
                1 => 'contactform',
                2 => 'dashactivity',
                3 => 'dashtrends',
                4 => 'dashgoals',
                5 => 'dashproducts',
                6 => 'graphnvd3',
                7 => 'gridhtml',
                8 => 'gsitemap',
                9 => 'pagesnotfound',
                10 => 'productcomments',
                11 => 'ps_banner',
                12 => 'ps_categorytree',
                13 => 'ps_checkpayment',
                14 => 'ps_contactinfo',
                15 => 'ps_crossselling',
                16 => 'ps_currencyselector',
                17 => 'ps_customeraccountlinks',
                18 => 'ps_customersignin',
                19 => 'ps_customtext',
                20 => 'ps_dataprivacy',
                21 => 'ps_emailsubscription',
                22 => 'ps_faviconnotificationbo',
                23 => 'ps_featuredproducts',
                24 => 'ps_imageslider',
                25 => 'ps_languageselector',
                26 => 'ps_linklist',
                27 => 'ps_mainmenu',
                28 => 'ps_searchbar',
                29 => 'ps_sharebuttons',
                30 => 'ps_shoppingcart',
                31 => 'ps_socialfollow',
                32 => 'ps_themecusto',
                33 => 'ps_wirepayment',
                34 => 'statsbestcategories',
                35 => 'statsbestcustomers',
                36 => 'statsbestproducts',
                37 => 'statsbestsuppliers',
                38 => 'statsbestvouchers',
                39 => 'statscarrier',
                40 => 'statscatalog',
                41 => 'statscheckup',
                42 => 'statsdata',
                43 => 'statsforecast',
                44 => 'statsnewsletter',
                45 => 'statspersonalinfos',
                46 => 'statsproduct',
                47 => 'statsregistrations',
                48 => 'statssales',
                49 => 'statssearch',
                50 => 'statsstock',
                51 => 'welcome',
                52 => 'psgdpr',
                53 => 'ps_mbo',
                54 => 'ps_buybuttonlite',
                55 => 'ps_checkout',
                56 => 'ps_facebook',
                57 => 'psxmarketingwithgoogle',
                58 => 'blockreassurance',
                59 => 'ps_facetedsearch',
            ],
            'ps_cache_dir' => '/var/www/html/var/cache/dev/',
            'mail_themes_uri' => '/mails/themes',
            'doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_cache.apcu.class' => 'Doctrine\\Common\\Cache\\ApcuCache',
            'doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_cache.chain.class' => 'Doctrine\\Common\\Cache\\ChainCache',
            'doctrine_cache.couchbase.class' => 'Doctrine\\Common\\Cache\\CouchbaseCache',
            'doctrine_cache.couchbase.connection.class' => 'Couchbase',
            'doctrine_cache.couchbase.hostnames' => 'localhost:8091',
            'doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_cache.memcache.connection.class' => 'Memcache',
            'doctrine_cache.memcache.host' => 'localhost',
            'doctrine_cache.memcache.port' => 11211,
            'doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine_cache.memcached.connection.class' => 'Memcached',
            'doctrine_cache.memcached.host' => 'localhost',
            'doctrine_cache.memcached.port' => 11211,
            'doctrine_cache.mongodb.class' => 'Doctrine\\Common\\Cache\\MongoDBCache',
            'doctrine_cache.mongodb.collection.class' => 'MongoCollection',
            'doctrine_cache.mongodb.connection.class' => 'MongoClient',
            'doctrine_cache.mongodb.server' => 'localhost:27017',
            'doctrine_cache.predis.client.class' => 'Predis\\Client',
            'doctrine_cache.predis.scheme' => 'tcp',
            'doctrine_cache.predis.host' => 'localhost',
            'doctrine_cache.predis.port' => 6379,
            'doctrine_cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine_cache.redis.connection.class' => 'Redis',
            'doctrine_cache.redis.host' => 'localhost',
            'doctrine_cache.redis.port' => 6379,
            'doctrine_cache.riak.class' => 'Doctrine\\Common\\Cache\\RiakCache',
            'doctrine_cache.riak.bucket.class' => 'Riak\\Bucket',
            'doctrine_cache.riak.connection.class' => 'Riak\\Connection',
            'doctrine_cache.riak.bucket_property_list.class' => 'Riak\\BucketPropertyList',
            'doctrine_cache.riak.host' => 'localhost',
            'doctrine_cache.riak.port' => 8087,
            'doctrine_cache.sqlite3.class' => 'Doctrine\\Common\\Cache\\SQLite3Cache',
            'doctrine_cache.sqlite3.connection.class' => 'SQLite3',
            'doctrine_cache.void.class' => 'Doctrine\\Common\\Cache\\VoidCache',
            'doctrine_cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine_cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine_cache.security.acl.cache.class' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => [
                'default' => 'doctrine.orm.default_entity_manager',
            ],
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => [

            ],
            'doctrine.connections' => [
                'default' => 'doctrine.dbal.default_connection',
            ],
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => true,
            'doctrine.orm.proxy_dir' => '/var/www/html/var/cache/dev//doctrine/orm/Proxies',
            'doctrine.orm.proxy_namespace' => 'Proxies',
        ];
    }
}
